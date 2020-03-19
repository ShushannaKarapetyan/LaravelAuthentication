@extends('layouts.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
    <form action="/payments" method="POST" style="justify-content: center;align-items: center;display: flex">
        @csrf
        <button
            type="submit"
            class="bg-blue py-3 px-5 text-white text-sm mt-5">
            Make Payment
        </button>
    </form>
@endsection
