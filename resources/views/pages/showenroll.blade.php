@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">
                    <!-- this -->
                    @include('layouts.sidebar')
                    <!-- this -->
                </div> --}}
                <div class="panel-heading">ENROLLEES</div>
                <div class="panel-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Middlename</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Subjects Enrolled</th>
                                </tr>
                        </thead>
                        <tbody>
                            @if(count($personalinfo) > 0)
                                @foreach($personalinfo as $personal)
                                    <tr>
                                        <td>{{$personal -> firstname}}</td>
                                        <td>{{$personal -> middlename}}</td>
                                        <td>{{$personal -> surname}}</td>
                                        <td>{{$personal -> email}}</td>
                                        <td>{{$personal -> course}}</td>
                                        <td>{{$personal -> subject}}</td>
                                        @if(!Auth::guest())
                                        <td><a href="/personalinfos/{{$personal->id}}/edit" class="btn btn-default">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['NewEnrolleesController@destroy', $personal -> id], 'method'=>'POST', 'class'=>'pull-right', 'onsubmit'=>'return ConfirmDelete()'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                        @endif
                                        
                                    </tr>
                                @endforeach
                            @else
                                <p>No enrollees existing</p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection