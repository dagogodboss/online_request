@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customers</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Other Name</th>
                            <th>Email Address</th>
                            <th>Amount</th>
                            <th>View Account/And Download Files</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($customers as $key => $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->other_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->amount_investing}}</td>
                            <td><a href="{{url('customer/view/'. hash('sha256', $user->id))}}" class="btn btn-primary btn-xs "><i class="glyphicon glyphicon-eye-open"></i> View Customer</a></td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
                    
                    
                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

