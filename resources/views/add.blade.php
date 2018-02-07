@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Add New Task</h2>
        <form action="/task" method="POST">
            <div class="form-group">
                <textarea name="description" class="form-control"></textarea>
            </div>
            <br/>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
@endsection