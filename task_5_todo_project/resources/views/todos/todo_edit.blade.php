@extends('master')
@section('content')
<section class="container mt-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h4 class="text-center">Add Task</h4>
        <form action="{{ route('todo_update',$todo->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="task">Enter your task:</label>
        <input value="{{ $todo->task }}" type="text" name="task" id="task" class="form-control" placeholder="Enter your task" required>
            </div>
            <div class="form-group">
                <label for="time">Enter your task:</label>
            <input value="{{ $todo->time }}" type="time" name="time" id="time" class="form-control" placeholder="Enter your task" required>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Update Task</button>
        </form>
        </div>
    </div>
</section>

@endsection
