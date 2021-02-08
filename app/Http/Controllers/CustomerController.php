<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\DataTables\CustomerDataTable;
use App\Repositories\CustomerRepository;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Response;

class CustomerController extends AppBaseController
{
    /** @var  CustomerRepository */
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepository = $customerRepo;
    }

    /**
     * Display a listing of the Customer.
     *
     * @param CustomerDataTable $customerDataTable
     * @return Response
     */
    public function index(CustomerDataTable $customerDataTable)
    {
        return view('customers.index', ['customers' => $this->customerRepository->all()]);
    }

    /**
     * Show the form for creating a new Customer.
     *
     * @return Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created Customer in storage.
     *
     * @param CreateCustomerRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('profile_picture')){
            $profile_image = uniqid().time().'.'.$request->file('profile_picture')->extension();
            $signature = uniqid().time().'.'.$request->file('signature')->extension();
            $id_card = uniqid().time().'.'.$request->file('id_card_image')->extension();
            $request->signature->move(public_path('customer/verification/signature'), $signature);
            $request->id_card_image->move(public_path('customer/verification/idcard'), $id_card);
            $request->profile_picture->move(public_path('customer/verification/profile'), $profile_image);
            $input['signature'] = public_path('customer/verification/signature/').$signature;
            $input['id_card_image'] = public_path('customer/verification/idcard/').$id_card;
            $input['profile_picture'] = public_path('customer/verification/profile/').$profile_image;
        }
        $customer = $this->customerRepository->create($input);
        return redirect('/thank-you');
    }

    public function findEmployee($name){
        return dd(Employee::getEmployee($name));
    }

    /**
     * Display the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customer = $this->customerRepository->find($id);

        if (empty($customer)) {


            return redirect(route('customers.index'));
        }

        return view('customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customer = $this->customerRepository->find($id);

        if (empty($customer)) {


            return redirect(route('customers.index'));
        }

        return view('customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified Customer in storage.
     *
     * @param  int              $id
     * @param UpdateCustomerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerRequest $request)
    {
        $customer = $this->customerRepository->find($id);

        if (empty($customer)) {


            return redirect(route('customers.index'));
        }

        $customer = $this->customerRepository->update($request->all(), $id);



        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified Customer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customer = $this->customerRepository->find($id);

        if (empty($customer)) {


            return redirect(route('customers.index'));
        }

        $this->customerRepository->delete($id);



        return redirect(route('customers.index'));
    }
    public function saveUserDetails(Request $request, Customer $user){
        //save other fields then save image below
        return $this->saveUserUploads($request, $user);
    }
    public function saveUserUploads(Request $request, Customer $user)
    {
        Validator::make($request, [
                'filenames' => 'required',
                'filenames.*' => 'mimes:png,jpeg',
                'filenames' => 'max:10240',
        ]);

        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/files/', $name);  //add correct path
                $data[] = $name;
            }
         }
         $file= new \File();
         $file->filenames=json_encode($data);
         $file->save();

        return back()->with('success', 'Your data has been saved successfully');
    }

    public function viewCustomer(Request $request, $uuid){
        $customer = collect($this->getUserByHash($uuid));
        return view('customers.show', compact('customer') );

    }

    public  function getUserByHash($uuid){
        foreach ($this->customerRepository->all() as $key => $user) {
            if(hash('sha256', $user->id) === $uuid){
                return $user;
            }
        }
    }

    public function DownloadUserUploads(Request $request, Customer $user)
    {
        $user_files = Customer::where('id', $request->id)->first('file1', 'file2', 'file3');
        return $this->downloadAsZip($user_files);
    }

    public function getAllUsersUpload(Request $request, $user_id, $file_type)
    {
        $image = Customer::where('id', $request->user_id)->get();
        $fileName = '';
        switch ($fileName) {
            case 'id_card':
                $fileName = $image['id_card'];
                break;
            case 'signature':
                $fileName = $image['signature'];
                break;
            case 'passport_photo':
                $fileName = $image['passport_photo'];
                break;
            default:
                $fileName = $image['passport_photo'];
                break;
        }
        $file = public_path() . "/uploads/" . $fileName;

        $content_type = $this->getContentType($file);
        $headers = [
            'Content-Type' => $content_type,
        ];
        return response()->download($file, 'filename.pdf', $headers);
    }


    public function getContentType($file)
    {
        $filename = basename($file);
        $file_extension = strtolower(substr(strrchr($filename, "."), 1));

        switch ($file_extension) {
            case "gif":
                $ctype = "image/gif";
                break;
            case "png":
                $ctype = "image/png";
                break;
            case "jpeg":
            case "jpg":
                $ctype = "image/jpeg";
                break;
            case "svg":
                $ctype = "image/svg+xml";
                break;
            default:
        }

        header('Content-type: ' . $ctype);
    }


    public function displayImages(Request $request,$id){
        $user = Customer::where('id', $id)->get();
    }
}
;