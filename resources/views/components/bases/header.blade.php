<!DOCTYPE HTML>
<head>
    <title>{{ $title }} - {{ config('app.name') }}</title>

    <base href="http://{{ $_SERVER['HTTP_HOST'] }}">

    <!-- Meta Tags -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="description" content="{{ $description }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $_SERVER['SCRIPT_NAME'] }}">
    <meta property="og:locale" content="ro_RO">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen">

    <!-- Javascript -->

    <script src="../js/jquery-1.12.3.min.js"></script>

    <script src="../js/default.js"></script>
</head>
<body>
<header>
    <noscript class="bold">Pentru o experiență deplină vă rugăm activați Javascript din setările browserului</noscript>
