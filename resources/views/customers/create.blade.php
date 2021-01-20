@extends('layouts.request-form')
@section('content')
<div class="main">
    <div class="container" style="padding-top: 1%">
        <img src="{{asset('request-form/images/logo.png')}}" class="center" >
        <h2>UK-Dion Online Investment Form</h2>
        @if($errors->any())
            <div class="alert alert-danger" style="background:red;width: max-content;padding: 10px;color: white;border-radius: 2px;position: fixed;bottom: 6px;left: 2px;">
                <span>{{$errors->first()}}</span>
            </div>
        @endif
        <form method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data" action="{{ route('customers.store')}}">
        @csrf
            <h3>
                Personal Info
            </h3>

            <fieldset>
                <div class="form-row form-input-flex">
                    <div class="form-input">First Name
                         <input type="text" name="first_name" id="first_name" placeholder="First Name" required />
                    </div>
                    <div class="form-input">Last Name
                         <input type="text" name="last_name" id="last_name" placeholder="Last Name"required />
                    </div>
                </div>
                <div class="form-row form-input-flex">
                    <div class="form-input">Home Address
                         <input type="text" name="home_address" id="home_address" placeholder="Home Address" required/>
                    </div>
                    <div class="form-input">Email Address
                         <input type="text" name="email" id="email" placeholder="example@domain.com" required/>
                    </div>
                </div>
                <div class="form-row form-input-flex">
                    <div class="form-input">City
                        <input type="text" name="city" id="city" placeholder="City" required/>
                    </div>
                    <div class="form-input">Nationality
                        <input type="text" name="nationality" id="nationality" placeholder="Nationality" required/>

                    </div>
                </div>
                <div class="form-row form-input-flex">
                    <div class="form-input">Phone Number
                        <input type="tel" name="phone_number" id="phone_number" placeholder="" required/>
                    </div>
                    <div class="form-input">Date of Birth
                        <input type="date" name="dateofbirth" id="dateofbirth" placeholder="" required/>
                    </div>
                </div>

                <div class="form-row form-input-flex">
                    <div class="form-input">Religion
                       <select name="religion" id="user_religion" required>
                            <option value="">Select Religion</option>
                            <option value="christian">Christian</option>
                            <option value="Muslim">Muslim</option>
                            <option value="others">Rather Not Say</option>
                        </select>
                    </div>
                    <div class="form-input">Marital Status
                        <select name="maritalStatus" id="marital_status" required>
                            <option value="">Marital Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="others">Others</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-caret-down"></i></span>
                    </div>
                </div>
            </fieldset>

            <h3>
                Next Of Kin
            </h3>

            <fieldset>
                <div class="form-row form-input-flex">
                    <div class="form-input">First Name
                         <input type="text" name="nx_first_name" id="first_name" placeholder="First Name" required/>
                    </div>
                    <div class="form-input">Last Name
                         <input type="text" name="nx_last_name" id="last_name" placeholder="Last Name" required/>
                    </div>
                </div>
                <div class="form-row form-input-flex">
                    <div class="form-input">Home Address
                         <input type="text" name="nxpermanent_address" id="nxpermanent_address" placeholder="Home Address" required/>
                    </div>
                    <div class="form-input">Phone Number
                         <input type="text" name="nxmobile" id="nxmobile" placeholder="Phone Number" required/>
                    </div>
                </div>
                <div class="form-row form-input-flex">
                    <div class="form-input">City
                        <input type="text" name="nxcity" id="nxcity" placeholder="City" required/>
                    </div>
                    <div class="form-input">Nationality
                        <input type="text" name="nxnationality" id="nxnationality" placeholder="Nationality" required/>

                    </div>
                </div>
                <div class="form-row form-input-flex">
                    <div class="form-input">State
                        <input type="text" name="nxstate" id="nxstate" placeholder="State" required/>
                    </div>
                    <div class="form-input">Gender
                        <input type="text" name="nxgender" id="nxgender" placeholder="Male Or Female" required/>
                    </div>
                </div>
                <div class="form-row form-input-flex">
                    <div class="form-input">Date of Birth
                            <input type="date" name="nxdateofbirth" id="nxdateofbirth" placeholder="" required/>
                        </div>
                </div>

                <div class="form-row form-input-flex">
                    <div class="form-input">Religion
                       <select name="nxreligion" id="nxreligion" required>
                            <option value="">Select Religion</option>
                            <option value="christian">Christian</option>
                            <option value="muslim">Muslim</option>
                            <option value="other">Rather Not Say</option>
                        </select>
                    </div>
                    <div class="form-input">Marital Status
                        <select name="country" id="country" required>
                            <option value="">Marital Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="others">Others</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-caret-down"></i></span>
                    </div>
                </div>
                <div class="form-row form-input-flex">
                    <div class="form-input">Relationship
                       <input type="text" name="nxrelationship" id="nxrelationship" placeholder="Relationship to the Next of Kin" required/>
                    </div>
                </div>
            </fieldset>


              <h3>
                Bank
            </h3>
            <fieldset>
                 <div class="form-row form-input-flex">
                    <div class="form-input">First Name
                         <input type="text" name="bnkfirst_name" id="bnkfirst_name" placeholder="First Name" required/>
                    </div>
                    <div class="form-input">Last Name
                         <input type="text" name="bnklast_name" id="bnklast_name" placeholder="Last Name" required/>
                    </div>
                </div>
                <div class="form-row form-input-flex">
                    <div class="form-input">Beneficiary Bank
                         <input type="text" name="bank" id="bank" placeholder="Bank" required/>
                    </div>
                    <div class="form-input">Account Number
                         <input type="text" name="account_number" id="account_number" placeholder="Account Number" required/>
                    </div>
                </div>
            </fieldset>

             <h3>
                Investment Plan
            </h3>

             <fieldset>


                 <div class="form-row form-input-flex">
                    <div class="form-input">
                       <select name="investplan" id="investment" required>
                            <option value="">Investment Plan</option>
                        </select>
                    </div>
                    <div class="form-input">
                        <select name="duration" id="duration" required>
                            <option value="">Duration</option>
                            <option value="6 months">6 Months</option>
                            <option value="3 months">3 Months</option>
                            <option value="1 months">1 Months</option>
                            <option value="5 Year">5 Years</option>
                            <option value="4 Year">4 Years</option>
                            <option value="3 Year">3 Years</option>
                            <option value="2 Year">2 Years</option>
                            <option value="1 Year">1 Year</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-caret-down"></i></span>
                    </div>
                </div>
                 <div class="form-row form-input-flex">
                    <div class="form-input">
                       <select name="idcard" id="idcard">
                            <option value="">ID Card type</option required>
                            <option value="dlicence">Drivers Licence</option>
                            <option value="vcard">Voters Card</option>
                            <option value="intpassport">International Passport</option>
                            <option value="nationalid">National ID</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-input">
                        Expiry Date<div class="form-input">
                         <input type="date" name="expiry_date" id="expiry_date"  />
                    </div>
                    </div>
                </div>

                 <div class="form-row form-input-flex">
                     <div class="form-input">Investement Amount
                         <input type="text" name="amount_investing" id="amount_investing" placeholder="Investement Amount" required/>
                    </div>
                </div>
            </fieldset>

            <h3>
               File Upload
            </h3>
            <fieldset>
                <div class="form-radio">
                    <label for="job" class="label-radio">What are you doing ?</label>
                    <div class="form-flex">
                        <div class="form-radio">
                            <input type="file" name="job" value="designer" id="designer" required/>
                            <label for="designer">
                                <figure>
                                    <img src="{{asset('request-form/images/icon-1.png')}}" alt="">
                                </figure>
                                <span>Passport</span>
                            </label>
                        </div>

                        <div class="form-radio">
                            <input type="File" name="job" value="coder" id="coder" checked="checked" required/>
                            <label for="coder">
                                <figure>
                                    <img src="{{asset('request-form/images/icon-2.png')}}" alt="">
                                </figure>
                                <span>ID Card</span>
                            </label>
                        </div>

                        <div class="form-radio">
                            <input type="file" name="job" value="developer" id="developer" required/>
                            <label for="developer">
                                <figure>
                                    <img src="{{asset('request-form/images/icon-3.png')}}" alt="">
                                </figure>
                                <span>Signature</span>
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>


        </form>
    </div>

</div>
@endsection
