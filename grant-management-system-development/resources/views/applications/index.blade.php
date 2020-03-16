@extends('layouts.app')

@section('content')
    <h1>Application Submission Page</h1>

    @if(count($applications) > 0)
        @foreach ($applications as $applications)
            <div class="well">
                <h3><a href = "/applications/{{$applications->id}}">{{$applications->fname}}</a></h3>
                <small> Created on {{$applications->created_at}}</small>
            </div>
        @endforeach
        
    @else
        <p>No submission found</p>
    @endif
@endsection