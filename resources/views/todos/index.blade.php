@extends('layouts.app')
@section('content')
@section('title')
    Todo List
@endsection
@if(session()->has('success'))

    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>

@endif
@if(session()->has('delete'))
<div class="alert alert-danger">
{{session()->get('delete')}}
</div>
@endif

<div class="container">
    <h1 class="text-center my-5">Todos Page</h1>


    <div class="row justify-content-center">
        <div class="col-md-8">
   <div class="card card-default">
       <div class="card-header">
           <strong>Todos</strong>
       </div>
       <div class="card-body">
       <ul class="list-group">
    @foreach($todos as $todo)
       <li class="list-group-item">
                {{$todo->name}}
           @if($todo->completed==1)
         <a href="{{route('todo',$todo->id)}}">
           <button type="submit" class="btn btn-primary btn-sm float-right">view</button>
         </a>
           @endif
           @if($todo->completed==0)
               {!! Form::open(['method'=>'post','action'=>['TodosController@uptrue',$todo->id]]) !!}

               {!! Form::submit('Completed',['class'=>'btn btn-success btn-sm float-right mx-2']) !!}
               {!! Form::close() !!}
           @endif

       </li>


    @endforeach
        {{$todos->links()}}
       </ul>
       </div>
   </div>
        </div>
    </div>
</div>
    @endsection
