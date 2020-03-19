@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                @foreach($conversations as $conversation)
                    <h2>
                        <a href="{{route('conversation.show', $conversation->id)}}">{{$conversation->title}}</a>

                        @continue($loop->last)

                        <hr>
                    </h2>
                @endforeach
            </div>
        </div>
    </div>
@endsection
