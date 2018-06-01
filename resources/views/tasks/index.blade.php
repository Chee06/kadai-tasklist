@extends('layouts.app')

@section('content')

 

    <h1>Tasks List</h1>
    
    @foreach ($tasks as $task)
               <li> Number:{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} <br> <ul>Task: {{ $task->content }} <br>Status: {{ $task->status }} @empty ($task->status && $task->content)  --empty--   @endempty </ul></li>
               
   
    @endforeach
   
    <br>
    <br>
     {!! link_to_route('tasks.create', 'POST') !!}


@endsection
