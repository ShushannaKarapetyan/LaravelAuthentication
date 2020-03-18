{{--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Me</title>
</head>
<body>
    <h1>It works again!</h1>

    <p>It sounds like you want to hear more about {{ $topic }}.</p>

</body>
</html>--}}


@component('mail::message')
# A Heading


Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, itaque.

- A list
- goes
- here

@component('mail::button',['url'=>'https://laracasts.com'])
    Visit Laracasts
@endcomponent

@endcomponent

