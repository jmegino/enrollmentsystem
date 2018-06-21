@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                {{-- <div class="panel-heading"> --}}
                    <!-- this -->
                    {{-- @include('inc.navbar') --}}
                    <!-- this -->
                {{-- </div> --}}
                <div class="panel-heading">NEW ENROLLEE</div>
                <div class="panel-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    {{-- <!-- @if(count($personals) >0)
                        @foreach($personals as $personal)
                            {{$personal -> name}}
                        @endforeach
                    @endif --> --}}
                    {!! Form::open(['action' => 'NewEnrolleesController@store', 'method' => 'POST']) !!}
    
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{Form::label('form_name', 'Firstname *')}}
                                        {{Form::text('firstname', '', ['class'=>'form-control', 'id'=>'form_name', 'required', 'data-error'=>'Firstname is required.',
                                        'placeholder'=>'Please enter your firstname'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                        {{Form::label('form_middlename', 'Middlename *')}}
                                        {{Form::text('middlename', '', ['class'=>'form-control', 'id'=>'form_middlename', 'required', 'data-error'=>'Middlename is required.',
                                        'placeholder'=>'Please enter your middlename'])}}
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{Form::label('form_lastname', 'Lastname *')}}
                                        {{Form::text('surname', '', ['class'=>'form-control', 'id'=>'form_lastname', 'required', 'data-error'=>'Lastname is required.',
                                        'placeholder'=>'Please enter your lastname'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('form_address', 'Address *')}}
                                        {{Form::text('address', '', ['class'=>'form-control', 'id'=>'form_address', 'required', 'data-error'=>'Please enter your address.',
                                        'placeholder'=>'Please enter your address'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{Form::label('form_email', 'Email *')}}
                                        {{Form::text('email', '', ['class'=>'form-control', 'id'=>'form_email', 'required', 'data-error'=>'Valid email is required.',
                                        'placeholder'=>'Please enter your email'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{Form::label('form_phone', 'Phone')}}
                                        {{Form::tel('phone', '', ['class'=>'form-control', 'id'=>'form_phone', 'placeholder' => 'Please enter your phone number'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('form_course', 'Course *')}}
                                        {{Form::text('course', '', ['class'=>'form-control', 'id'=>'form_course', 'required', 'data-error'=>'Please enter your course.',
                                        'placeholder'=>'Please enter your course.'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-inline">
                                        {{Form::label('form_subjects', 'Subjects *')}}
                                        {{Form::button('Add Subjects', ['class'=>'add_field_button btn btn-primary pull-right'])}}
                                        <div class="input_fields_wrap">
                                            {{Form::text('subject[]', '', ['class'=>'form-control', 'id'=>'form_subject', 'required', 'data-error'=>'Please enter your subjects.',
                                            'placeholder' => 'Enter subject'])}}        
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{Form::label('form_dob', 'Date of Birth')}}    
                                        {{Form::text('date', '', ['class'=>'form-control', 'id'=>'datepicker', 'required', 'placeholder'=>'Please enter your date of birth'])}}        
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection