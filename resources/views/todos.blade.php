@extends('layout')

@section('content')

<div class="row">
    
    <div class="col-lg-9  col-lg-offset-9">
        <form action="/create/todo" method="post">
            {{csrf_field()}}

             <input type="text" name="todo" class="form-control input-lg" placeholder="Create A New Todo">
           

        </form>
       
    </div>
</div>

<hr>

 @foreach($todos as $todo)
                      {{ $todo->todo }} <a  href="{{route('todo.delete',['id'=>$todo->id])}}"  class="btn btn-danger">Delete</a>  | <a  href="{{route('todo.update',['id'=>$todo->id])}}"  class="btn btn-info btn-xs">Update</a>

                      @if(!$todo->completed)

<a  href="{{route('todo.completed',['id'=>$todo->id])}}"  class="btn  btn-xs btn-success ">Mark As Completed</a>

@else
<span class="text-success">Completed</span>

                      @endif
                      <hr>

                   @endforeach


@stop