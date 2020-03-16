@extends('layouts.app')

@section('content')
    <h1>Edit an application</h1>
    {!! Form::open(['action' => ['ApplicationController@update', $application->id], 'method' => 'POST']) !!}
        @method('PUT')
        @csrf
        <div class= "form-group">
            {{Form::label('fname', 'First Name')}}
            {{Form::text('fname',$application->fname, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
            
            {{Form::label('lname', 'Last Name')}}
            {{Form::text('lname',$application->lname, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}

        </div>
        <div class= "form-group">
            {{Form::select('dept', [
            'Art History' => 'Art History', 
            'Biology' => 'Biology', 
            'Botany' => 'Botany', 
            'Chemistry' => 'Chemistry',
            'Computer Science' => 'Computer Science',
            ], null, ['placeholder' => 'Select a department'])}}
            

        </div>

        
        <div class= "form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $application->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}

        </div>
        
        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection

