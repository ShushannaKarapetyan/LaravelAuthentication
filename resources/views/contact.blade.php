<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Send Mail</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center" style="height: 100vh">
    <form action="{{route('contact.store')}}" method="POST" class="bg-white p-6 rounded shadow-md" style="width: 300px">
        @csrf
        <div class="mb-5">
            <label for="mail"
                   class="block
                   text-xs uppercase font-semibold mb-1">
                Email Address
            </label>
            <input type="text"
                   id="email"
                   name="email"
                   class="border px-2 py-3 text-sm w-full">

            @error('email')
                <div class="text-red text-xs mt-2">{{$message}}</div>
            @enderror

            <button
                    type="submit"
                    class="bg-blue py-3 text-white rounded-full text-sm w-full mt-5">
                Email me
            </button>

            @if(session('message'))
                <p
                    class="mt-2 text-green text-xs">
                    {{ session('message') }}
                </p>
            @endif
        </div>

    </form>

</body>
</html>

