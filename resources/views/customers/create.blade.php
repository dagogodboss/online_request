@extends('layouts.request-form')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <div class="wizard card-like">
                @if($errors->any())
                <div class="alert alert-danger" style="background:red;width: max-content;padding: 10px;color: white;border-radius: 2px;position: fixed;bottom: 6px;left: 2px;">
                    <span>{{$errors->first()}}</span>
                </div>
            @endif
                <form method="POST" class="sign-up" enctype="multipart/form-data" action="{{ route('customers.store')}}">
                    @csrf
                    <div class="wizard-header">
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="text-center">
                                    UK-DION ONLINE INVESTMENT FORM
                                </h3>
                                <hr />
                                <div class="steps text-center">
                                    <div class="wizard-step active"></div>
                                    <div class="wizard-step"></div>
                                    <div class="wizard-step"></div>
                                    <div class="wizard-step"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-body">
                        <div class="step initial active">
                            <h3>Investors Details</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="othername">Other Name</label>
                                        <input type="text" class="form-control" id="other_name" name="other_name" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" other="email"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control" id="gender" name="gender" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="number">Phone Number</label>
                                        <input type="number" class="form-control" id="number" name="mobile" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="address">Home Address</label>
                                        <input type="text" class="form-control" id="address" name="home_address" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="company">Company Name</label>
                                        <input type="text" class="form-control" id="company" name="company_name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="marital">Martial Status</label>
                                        <input type="text" class="form-control" id="marital" name="marital_status" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <input type="text" class="form-control" id="religion" name="religion" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nationality">Nationality</label>
                                        <input type="text" class="form-control" id="nationality"
                                            name="country_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state" name="state" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dob">DOB</label>
                                        <input type="date" class="form-control" id="dob" name="dateofbirth" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="branch">Branch</label>
                                        <input type="text" class="form-control" id="branch" name="branch" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step">
                            <h3>Next of Kin</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="nx_first_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="nx_last_name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="othername">Other Name</label>
                                        <input type="text" class="form-control" id="othername" name="nx_other_name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="nx_email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control" id="firstname" name="nx_gender" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="numnber">Phone NUmber</label>
                                        <input type="text" class="form-control" id="lastname" name="nx_mobile" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nx_permanent_address">Address</label>
                                        <input type="text" class="form-control" id="nx_permanent_address"
                                            name="nx_permanent_address"  required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="text">Nationality</label>
                                        <input type="text" class="form-control" id="text"
                                            name="nx_country_name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="text">State</label>
                                        <input type="text" class="form-control" id="text" name="nx_state" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nx_city">City</label>
                                        <input type="text" class="form-control" id="nx_city" name="nx_city" 
                                        required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Relationship</label>
                                        <input type="text" class="form-control" id="lastname" name="nx_relationship" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Religion</label>
                                        <input type="text" class="form-control" id="email" name="nx_religion" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="religion">Next Of Kin Date Of Birth</label>
                                        <input type="date" class="form-control" id="religion" name="nx_date_of_birth" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step">
                            <h3>Investment</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="investplan">Plan</label>
                                        <select class="form-control" name="invest_plan"  
                                        id="investplan" required>
                                            <option value="">Select Investment Plan</option>
                                            <option value="smart_saver">Smart Saver</option>
                                            <option value="child_trust">Child Trust</option>
                                            <option value="prime_capital">Prime Capital</option>
                                            <option value="investment_club">Investment Club</option>
                                            <option value="flex_investment">Flex Investment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="amount_investing">Amount</label>
                                        <input type="text" class="form-control" id="amount_investing" name="amount_investing" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="marketer_name">Marketer</label>
                                        <input type="text" class="form-control" id="marketer_name" name="marketer_name"  required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="duration">Duration</label>
                                        <input type="text" class="form-control" id="duration" name="duration" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">ID Card Type</label>
                                        <select class="form-control" name="id_card_type" required>
                                            <option value="">Select ID Card Type</option>
                                            <option value="diver_licence">Driver License</option>
                                            <option value="voters_card">Voters Card</option>
                                            <option value="international_passport">International Passport</option>
                                            <option value="national_id_card">National ID Card</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="id_expiry_date">Expiry Date</label>
                                        <input type="text" class="form-control" id="id_expiry_date"
                                            name="id_expiry_date" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="repeatPassword">Interest Payout</label>
                                        <select class="form-control" name="interest_payout" required>
                                            <option value="">Select Payout method</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="quaterly">Quaterly</option>
                                            <option value="bi-annual">Bi-annually</option>
                                            <option value="annual">Annual</option>
                                            <option value="matured">Matured</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step">
                            <h3>Beneficary Bank Details</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="bank_first_name" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="bank_last_name" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="othername">Other Name</label>
                                        <input type="text" name="bank_other_name" class="form-control" id="bank_other_name" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bank">Bank</label>
                                        <input type="text" class="form-control" id="bank" name="bank" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="number">Account Number</label>
                                        <input type="number" class="form-control" id="acctnumber"
                                            name="account_number" required/>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="acctType">Bank Account Type</label>
                                        <input type="text" class="form-control" id="acctType" name="bank_account_type"  required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="number">Files</label>
                                        <div class="d-flex">
                                            <label for="signature">Your Signature</label>
                                            <input type="file" class="form-control" name="signature" id="signature" required/>
                                            <label for="profile_picture">Your Profile Image</label>
                                            <input type="file" class="form-control" name="profile_picture"  id="profile_picture" required/>
                                            <label for="id_card_image">ID Card Image</label>
                                            <input type="file" class="form-control" name="id_card_image" id="id_card_image" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-footer">
                        <div class="row">
                            <div class="">
                                <button id="wizard-prev" style="display:none" type="button"
                                    class="btn btn-irv btn-irv-default">
                                    Previous
                                </button>
                            </div>
                            <div class="">
                                <button id="wizard-next" type="button" class="btn btn-irv">
                                    Next
                                </button>
                            </div>
                            <div class="">
                                <button id="wizard-subm" style="display:none" type="submit" class="btn btn-irv">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
