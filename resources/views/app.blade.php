<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Titus Kiptanui">
    <meta name="description" content="We manage rental clients easily at affordable prices. Help save a coin with us in a quick span of a second">
    <title>Home - Royals Real Time</title>
    @vite('resources/css/app.css')
    <link  rel="icon" type="image/png" href="{{ URL::to('images/logopic.png') }}">
    <link rel="stylesheet" href="{{ URL::to('fontawesome-free-6.5.1-web/css/all.min.css') }}">
</head>
<body>
    @yield('content')
</body>
</html>