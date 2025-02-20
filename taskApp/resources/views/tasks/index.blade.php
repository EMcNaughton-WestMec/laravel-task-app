@extends('layouts.app')

@section('content')
   <h2 class="text-2xl font-semibold">All Tasks</h2>
   <form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
      <!-- Search Field -->
      <input
         type="text"
         name="search"
         value="{{ request('search') }}"
         placeholder="Search tasks..."
         class="border border-gray-300 px-2 py-1 rounded"
      >
      <!-- Sort Options -->
      <select name="sort" class="border border-gray-300 px-2 py-1 rounded">
         <option value="task_name" {{ request('sort') === 'task_name' ? 'selected' : '' }}>
         Alphabetical
         </option>
         <option value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>
         Deadline
         </option>
         <option value="category" {{ request('sort') === 'category' ? 'selected' : '' }}>
         Category
         </option>
      </select>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 ml-2 rounded hover:bg-blue-600">
         Search & Sort
      </button>
   </form>
   <ul>
      @forelse ($tasks as $task)
         <li class="mb-2">
            {{$task->task_name}} |
            {{$task->task_location}} |
            {{$task->time_complexity}} |
            {{$task->materials_required}} |
            {{$task->deadline}} |
            {{$task->priority}} |
            {{$task->category}}
         </li>
      @empty
         <li>No tasks yet.</li>
      @endforelse
   </ul>

   <div class="mt-4">
      <a href="{{route('tasks.create')}}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
         Create a New Task
      </a>
   </div>
@endsection