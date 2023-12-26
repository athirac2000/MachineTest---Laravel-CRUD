@extends('tasks.layout')

@section('title', 'Create Task')

@section('content')
<a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary mb-3 btn-sm"><i class="fas fa-arrow-left "></i> </a>
    <h2 style="color: black;">Create Task</h2>
    
<!-- this is used to check if there is any validation errors, if so show alert -->
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
            <label for="title" style="color: black;">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="description" style="color: black;">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="due_date"style="color: black;">Due Date:</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ old('due_date') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
@endsection
