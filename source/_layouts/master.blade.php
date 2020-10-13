<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="border-b border-solid mt-8">
        <div class="mx-auto max-w-3xl flex items-center justify-between mb-3">
            <a href="#" class="text-3xl hover:underline">Blog</a>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-red-600 hover:underline">About</a>
                <span>/</span>
                <a href="#" class="text-red-600 hover:underline">Resume</a>
                <span>/</span>
                <a href="#" class="text-red-600 hover:underline">Contact</a>
            </div>
        </div>
    </nav>
    <div class="max-w-3xl mx-auto">
        @yield('body')
    </div>

</body>

</html>