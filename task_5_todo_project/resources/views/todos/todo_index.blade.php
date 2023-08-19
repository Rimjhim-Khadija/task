@extends('master')
@section('content')

<section class="container mt-5">
    <h4 class="text-center">ToDo List</h4>

    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <a href="{{ route('todo_create') }}" class="btn btn-primary btn-sm mb-2">Add Task</a>
            <table class="table table-bordered">
              <thead>
                <th>Sl no.</th>
                <th>Task</th>
                <th>Time</th>
                <th>Actions</th>
              </thead>
              <tbody>
                @php
                    $sl = 1;
                @endphp
                @foreach ($todos as $todo )
                <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $todo->task }}</td>
                    <td>{{ $todo->time }}</td>
                    <td>
                        <a href="{{ route('todo_show',$todo->id) }}" class="btn btn-sm btn-info">show</a>

                        <a href="{{ route('todo_edit',$todo->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('todo_delete',$todo->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

              </tbody>

            </table>
        </div>

    </div>
</section>
@endsection
