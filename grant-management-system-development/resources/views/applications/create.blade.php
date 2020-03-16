@extends('layouts.app')

@section('content')
    <h1>Submit an application</h1>
    {!! Form::open(['action' => 'ApplicationController@store', 'method' => 'POST']) !!}
        <div class= "form-group">
            {{Form::label('fname', 'First Name')}}
            {{Form::text('fname','', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
            
            {{Form::label('lname', 'Last Name')}}
            {{Form::text('lname','', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}

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
            {{Form::textarea('body','', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}

        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

