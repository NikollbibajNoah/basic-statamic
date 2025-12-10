<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $page->title ?? $site->name }}</title>
    @vite(['resources/js/site.js', 'resources/css/site.css'])
</head>
<body class="bg-gray-100 font-sans leading-normal text-gray-900">

@include('partials.navbar')

<main class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center">
    @yield('content')
</main>

@include('partials.footer')

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
