@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold">Task Details</h2>
    <div class="mb-2">
        <strong>Task Name:</strong> {{ $task->task_name }}
    </div>
    <div class="mb-2">
        <strong>Location:</strong> {{ $task->task_location }}
    </div>
    <div class="mb-2">
        <strong>Time Complexity:</strong> {{ $task->time_complexity }}
    </div>
    <div class="mb-2">
        <strong>Materials Required:</strong> {{ $task->materials_required }}
    </div>
    <div class="mb-2">
        <strong>Deadline:</strong> {{ $task->deadline }}
    </div>
    <div class="mb-2">
        <strong>Priority:</strong> {{ $task->priority }}
    </div>
    <div class="mb-2">
        <strong>Category:</strong> {{ $task->category }}
    </div>
    <div style="margin-top:20px;">
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary bg-blue-700 hover:bg-blue-500 text-white p-1 rounded">Edit Task</a>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary bg-gray-800 hover:bg-gray-600 text-white p-1 rounded">Back to List</a>
    </div>
@endsection