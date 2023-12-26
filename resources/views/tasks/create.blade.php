@extends('tasks.layout')

@section('title', 'Create Task')

@section('content')
    <h2>Create Task</h2>
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

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date:</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ old('due_date') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
@endsection
