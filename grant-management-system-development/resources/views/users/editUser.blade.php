@extends('layouts.app')

@section('content')
    <h1>Edit an application</h1>
    {!! Form::open(['action' => ['UserController@update', $user->id], 'method' => 'POST']) !!}
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
            <!--Needed to make user part of the voting committe-->
           
        <div class="form-group row">
            <label for="dept_id" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                <div class="col-md-6">
                    <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" data-toggle="dropdown" href="#">Action</a>
                                <a class="dropdown-item" data-toggle="dropdown" href="#">Another action</a>
                                <a class="dropdown-item" data-toggle="dropdown" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
        </div>
        
        <div class= "form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $application->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}

        </div>
        
        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection

