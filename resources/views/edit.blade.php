@extends('layouts.app')
@section('content')
   <div class="container">
        <h2>Edit The Task</h2>
        <form method="POST" action="/task/{{$task->id}}">
        <div class="form-group">
            <textarea name="description" class="form-control">{{$task->description }}</textarea>	
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Task</button>
        </div>
        {{ csrf_field() }}
        </form>
   </div>
@endsection