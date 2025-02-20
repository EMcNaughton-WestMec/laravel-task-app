@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Create New Task</h1>

    <form action="" method="post">
        @csrf
        {{-- Task Name --}}
        <div class="mb-4">
            <label for="task_name">Task Name</label>
            <input type="text" name="task_name" id="task_name">
        </div>
        {{-- Task Location --}}
        <div class="mb-4">
            <label for="task_location">Location</label>
            <input type="text" name="task_location" id="task_location">
        </div>
        {{-- Start Time --}}
        <div class="mb-4">
            <label for="start_time">Start Time</label>
            <input type="text" name="start_time" id="start_time">
        </div>
        {{-- End Time --}}
        <div class="mb-4">
            <label for="end_time">End Time</label>
            <input type="text" name="end_time" id="end_time">
        </div>
    </form>
</div>
@endsection