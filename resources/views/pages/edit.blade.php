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
                <div class="panel-heading">EDIT ENROLLEE</div>
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
                    {!! Form::open(['action' => ['NewEnrolleesController@update', $personalinfo->id], 'method' => 'POST']) !!}
    
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{Form::label('form_name', 'Firstname *')}}
                                        {{Form::text('firstname', $personalinfo->firstname, ['class'=>'form-control', 'id'=>'form_name', 'required', 'data-error'=>'Firstname is required.'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{Form::label('form_middlename', 'Middlename *')}}
                                        {{Form::text('middlename', $personalinfo->middlename, ['class'=>'form-control', 'id'=>'form_middlename', 'required', 'data-error'=>'Middlename is required.'])}}
                                            <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{Form::label('form_lastname', 'Lastname *')}}
                                        {{Form::text('surname', $personalinfo->surname, ['class'=>'form-control', 'id'=>'form_lastname', 'required', 'data-error'=>'Lastname is required.'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('form_address', 'Address *')}}
                                        {{Form::text('address', $personalinfo->address, ['class'=>'form-control', 'id'=>'form_address', 'required', 'data-error'=>'Please enter your address.'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{Form::label('form_email', 'Email *')}}
                                        {{Form::text('email', $personalinfo->email, ['class'=>'form-control', 'id'=>'form_email', 'required', 'data-error'=>'Valid email is required.'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{Form::label('form_phone', 'Phone')}}
                                        {{Form::tel('phone', $personalinfo->phone, ['class'=>'form-control', 'id'=>'form_phone'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('form_course', 'Course *')}}
                                        {{Form::text('course', $personalinfo->course, ['class'=>'form-control', 'id'=>'form_course', 'required', 'data-error'=>'Please enter your course.'])}}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {{Form::button('Cancel', ['class'=>'btn btn-default pull-right', 'onclick'=>'window.history.go(-1); return false;'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection