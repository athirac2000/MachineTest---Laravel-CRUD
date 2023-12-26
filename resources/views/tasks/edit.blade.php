@extends('tasks.layout')

@section('title', 'Edit Task')

@section('content')
<a href="{{ route('tasks.index') }}" class="btn  mb-3 btn-sm btn-outline-secondary" ><i class="fas fa-arrow-left "></i></a>
    <h2 style="color: black;">Edit Task</h2>
    

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
            <label for="title"style="color: black;">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $task->title) }}" required>
        </div>
        <div class="form-group">
            <label for="description" style="color: black;">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $task->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="due_date" style="color: black;">Due Date:</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date) }}" required>
        </div>
        <button type="submit" class="btn btn-primary" onclick="confirmUpdate()">Update Task</button>
    </form>
@endsection
