@extends('master')
@section('content')


<section class="container mt-5">
    <h4 class="text-center">ToDo View</h4>

    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <a href="{{ route('todo_index') }}" class="btn btn-primary btn-sm mb-2">Go Back</a>
            <h5>Task: {{ $todo->task }} </h5>
            <h6>Time: {{ $todo->time }}</h6>
        </div>

    </div>
</section>
@endsection
