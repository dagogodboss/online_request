<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    {!! Form::text('dateofbirth', null, ['class' => 'form-control','id'=>'dateofbirth']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateofbirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Religion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('religion', 'Religion:') !!}
    {!! Form::text('religion', null, ['class' => 'form-control']) !!}
</div>

<!-- Maritalstatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maritalStatus', 'Maritalstatus:') !!}
    {!! Form::text('maritalStatus', null, ['class' => 'form-control']) !!}
</div>

<!-- Nx First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nx_first_name', 'Nx First Name:') !!}
    {!! Form::text('nx_first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Nx Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nx_last_name', 'Nx Last Name:') !!}
    {!! Form::text('nx_last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Nxother Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nxother_name', 'Nxother Name:') !!}
    {!! Form::text('nxother_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Nxdateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nxdateofbirth', 'Nxdateofbirth:') !!}
    {!! Form::text('nxdateofbirth', null, ['class' => 'form-control','id'=>'nxdateofbirth']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#nxdateofbirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nxreligion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nxreligion', 'Nxreligion:') !!}
    {!! Form::text('nxreligion', null, ['class' => 'form-control']) !!}
</div>

<!-- Nxgender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nxgender', 'Nxgender:') !!}
    {!! Form::text('nxgender', null, ['class' => 'form-control']) !!}
</div>

<!-- Nxpermanent Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nxpermanent_address', 'Nxpermanent Address:') !!}
    {!! Form::text('nxpermanent_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Nxcity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nxcity', 'Nxcity:') !!}
    {!! Form::text('nxcity', null, ['class' => 'form-control']) !!}
</div>

<!-- Nxnationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nxnationality', 'Nxnationality:') !!}
    {!! Form::text('nxnationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Nxstate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nxstate', 'Nxstate:') !!}
    {!! Form::text('nxstate', null, ['class' => 'form-control']) !!}
</div>

<!-- Nxrelationship Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nxrelationship', 'Nxrelationship:') !!}
    {!! Form::text('nxrelationship', null, ['class' => 'form-control']) !!}
</div>

<!-- Bnkfirst Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bnkfirst_name', 'Bnkfirst Name:') !!}
    {!! Form::text('bnkfirst_name', null, ['class' => 'form-control']) !!}
</div>