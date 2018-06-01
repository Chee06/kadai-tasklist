@extends('layouts.app')

@section('content')

    <h1>Create New Page</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'Task') !!}
        {!! Form::text('content') !!}

   
        {!! Form::label('status', 'Status') !!}
        {!! Form::text('status') !!}
        
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
   
@endsection
