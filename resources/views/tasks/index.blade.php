@extends('layouts.app')

@section('content')

 

    <h1>Tasks List</h1>
   
   
   @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Content</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <br>
    <br>
     {!! link_to_route('tasks.create', 'POST', null, ['class' => 'btn btn-primary']) !!}


@endsection
