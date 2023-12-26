@extends('tasks.layout')

@section('title', 'Edit Task')

@section('content')
    <h2>Edit Task</h2>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Back to Task List</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $task->title) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $task->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date:</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
@endsection
