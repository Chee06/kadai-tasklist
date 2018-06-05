@extends('layouts.app')

@section('content')

    <h1>Create New Page</h1>
    
    <div class="row">
        <div class="col-xs-12">
        <div class="col-sm-offset-2 col-sm-8">
        <div class="col-md-offset-2 col-md-8">
        <div class=  "col-lg-offset-3 col-lg-6"> 
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                    
                        <div class="form-group">
                            {!! Form::label('content', 'Tasks:') !!}
                            {!! Form::text('content', null, ['class' => 'form-control']) !!}
                        </div>
                            
                        <div class="form-group">
                            {!! Form::label('status', 'Status:') !!}
                            {!! Form::text('status', null, ['class' => 'form-control']) !!}
                        </div>
                        
                        {!! Form::submit('SUBMIT', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
            
        </div>
        </div>
        </div> 
        </div> 
   
@endsection
