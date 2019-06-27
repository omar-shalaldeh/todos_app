@extends('layouts.app')


@section('content')
<h1 class="text-center my-3">Create Todo</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <strong>Add New Todo</strong>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!!Form::open(['method'=>'POST','action'=>'TodosController@store'])!!}
                   <div class="form-group">
                       {!!Form::label('name','Name : ')!!}
                       {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Name......']) !!}
                   </div>
                    <div class="form-group">
                        {!!Form::label('description','Description : ')!!}
                        {!!Form::textarea('description',null,['rows'=>'5','class'=>'form-control','placeholder'=>'Enter Desc......']) !!}
                    </div>

                    <div class="form-group text-center">
                        <input type="hidden" name="completed" value="0">
                    </div>
                    <div class="form-group text-center">
                        {!! Form::submit('Create',['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>







    @endsection