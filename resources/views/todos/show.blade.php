@extends('layouts.app')

@section('content')
@section('title')
    {{$todo->name}}
    @endsection
<div class="container">
    <h1 class="text-center my-5">{{$todo->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <strong>Todo <small>number {{$todo->id}}</small></strong>
                </div>
                <div class="card-body">

                        {{$todo->description}}


                </div>

            </div>

                <a href="{{route('ed-todo',$todo->id)}}" class="btn btn-info btn-sm my-2">Edit</a>


            <a href="{{route('del-todo',$todo->id)}}" class="btn btn-danger btn-sm my-2">delete</a>
        </div>
    </div>
</div>
@endsection