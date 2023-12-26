@extends('tasks.layout')

@section('title', 'View Task')

@section('content')
    <div class="card">
        <div class="card-header bg-info text-white">
            <h2 class="card-title text-center mb-0">Task Details</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3"><i class="fas fa-arrow-left mr-2"></i> Back to Task List</a>

            <div class="row">
                <div class="col-md-3 text-muted">Title:</div>
                <div class="col-md-9">{{ $task->title }}</div>

                <div class="col-md-3 text-muted">Description:</div>
                <div class="col-md-9">{{ $task->description }}</div>

                <div class="col-md-3 text-muted">Due Date:</div>
                <div class="col-md-9">{{ $task->due_date }}</div>
            </div>
        </div>
    </div>
@endsection
