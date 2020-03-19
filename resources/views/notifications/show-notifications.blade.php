@extends('layouts.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
    <div class="container">
        <ul>
            {{--@foreach($notifications as $notification)
                <li>
                    @if($notification->type === 'App\Notifications\PaymentReceived')
                        --}}{{-- {{ $notification->type }}--}}{{--

                        --}}{{--in here is array'data'  vendor/laravel/framework/src/Illuminate/Notifications/DatabaseNotification.php--}}{{--
                        We have received a payment of ${{ $notification->data['amount'] / 100 }} from you.
                    @endif
                </li>
            @endforeach--}}


            @forelse($notifications as $notification)
                <li>
                    @if($notification->type === 'App\Notifications\PaymentReceived')
                          We have received a payment of ${{ $notification->data['amount'] / 100 }} from you.
                    @endif
                </li>
            @empty
                You have no unread notification at this time.
            @endforelse
        </ul>
    </div>
@endsection
