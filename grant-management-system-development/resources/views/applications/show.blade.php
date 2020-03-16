@extends('layouts.app')

@section('content')
<a href="/applications" class= "btn btn-secondary">Go Back</a>
    <h1>{{$application->fname}} {{$application->lname}}</h1>
    <div>
        {{$application->body}}
    </div>
    <hr>
    <small>Updated on: {{$application->updated_at}}
    <hr>
    <a href="/applications/{{$application->id}}/edit" class="btn btn-default">Edit</a>
   
@endsection