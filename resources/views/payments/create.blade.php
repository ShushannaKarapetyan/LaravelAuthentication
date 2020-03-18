{{--<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Send Mail</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <form action="/payments" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        <button
            type="submit"
            class="bg-blue py-3 text-white rounded-full text-sm w-full mt-5">
            Payment
        </button>
    </form>
</body>
</html>--}}

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
