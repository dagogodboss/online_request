<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Customer
 * @package App\Models
 * @version January 19, 2021, 10:44 am UTC
 *
 * @property string $last_name
 * @property string $first_name
 * @property string $email
 * @property string $city
 * @property string $nationality
 * @property string $phone_number
 * @property string $phone_number
 * @property string $dateofbirth
 * @property string $religion
 * @property string $maritalStatus
 * @property string $nx_first_name
 * @property string $nx_last_name
 * @property string $nx_other_name
 * @property string $nx_date_of_birth
 * @property string $nx_religion
 * @property string $nx_gender
 * @property string $nx_permanent_address
 * @property string $nx_mobile
 * @property string $nx_city
 * @property string $nx_country_name
 * @property string $nx_state
 * @property string $nx_relationship
 * @property string $bank_first_name
 */
class Customer extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'customers';


    protected $dates = ['deleted_at'];



    protected $guarded = [
      'created_at','updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer','last_name' => 'string','first_name' => 'string','email' => 'string','city' => 'string','country_name' => 'string','mobile' => 'string','mobile' => 'string','dateofbirth' => 'string','religion' => 'string','marital_status' => 'string','nx_first_name' => 'string','nx_last_name' => 'string','nxother_name' => 'string','nx_date_of_birth' => 'string','nx_religion' => 'string','nx_gender' => 'string','nx_permanent_address' => 'string','nx_mobile' => 'string','nx_city' => 'string','nx_country_name' => 'string','nx_state' => 'string','nx_relationship' => 'string','bank_first_name' => 'string','bank' => 'string', 'account_number' => 'string', 'id_card_type' => 'string', 'amount_investing' => 'string', 'gender' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = ['last_name' => 'required','first_name' => 'required','email' => 'required|email|unique:customers','city' => 'required','country_name' => 'required','mobile' => 'required|unique:customers','dateofbirth' => 'required','religion' => 'required','marital_status' => 'required','nx_first_name' => 'required','nx_last_name' => 'required','nx_date_of_birth' => 'required','nx_religion' => 'required','nx_gender' => 'required','nx_permanent_address' => 'required','nx_mobile' => 'required','nx_city' => 'required','nx_country_name' => 'required','nx_state' => 'required','nx_relationship' => 'required','bank_first_name' => 'required','bank_last_name' => 'required', 'account_number' => 'required', 'id_card_type' => 'required', 'duration' => 'required',  'amount_investing' => 'required','sign' => 'image|mimes:jpeg,png,jpg,gif,svg','idimage' => 'image|mimes:jpeg,png,jpg,gif,svg','profilepicture' => 'image|mimes:jpeg,png,jpg,gif,svg', 'invest_plan' => 'required', 'marketer_name' => 'required', 'id_expiry_date' => 'required', 
    ];
}
