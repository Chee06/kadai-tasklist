@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}

@endsection
