@extends('tasks.layout')

@section('title', 'Task List')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title text-center mb-0" style="color: black;">Task List</h2>
        </div>
        <div class="card-body" >
            <a href="{{ route('tasks.create') }}" class="btn btn-success mb-3" style="float: right;">Create New Task</a>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($tasks->isEmpty())
                <p class="text-center" style="color: black;">No tasks added yet.</p>
            @else
                <table class="table table-hover  table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Due Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description }}</td>
                                <td>{{ $task->due_date }}</td>
                                <td>
                                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline" id="deleteForm">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete()">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
