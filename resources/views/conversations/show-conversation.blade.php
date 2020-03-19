@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <p>
                    <a href="/conversations" class="btn btn-primary">Back</a>
                </p>

                <h1>{{$conversation->title}}</h1>

                <p class="text-muted">Posted by {{ $conversation->user->name }}</p>

                <div>
                    {{ $conversation->body }}
                </div>

                <hr>

                @include('conversations.replies')
            </div>
        </div>
    </div>

@endsection
