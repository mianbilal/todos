@extends('layout')

@section('content')

<div class="row">
    
    <div class="col-lg-9  col-lg-offset-9">
        <form action="{{route('todo.save',['id'=>$todo->id])}}" method="post">
            {{csrf_field()}}

             <input type="text" name="todo" class="form-control input-lg" value="{{$todo->todo}}" placeholder="Create A New Todo">
           

        </form>
       
    </div>
</div>
<hr>

