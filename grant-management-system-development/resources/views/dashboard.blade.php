@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <h3>Your Applications</h3>
                    <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @if(count($applications) > 0)
                      @foreach($applications as $application)
                      <tr>
                        <td>{{$application->lname}}</td>
                        <td><a href="/applications/{{$application->id}}/edit" class="btn btn-default">Edit</a></td>
                      </tr>
                      @endforeach
                     @else 
                        <tr>
                        <td>Not an array</td>
                      </tr>
                    @endif
                    </table>
                    <hr>
                    <a href="/applications/create" class="btn btn-primary"> Submit an Application </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
