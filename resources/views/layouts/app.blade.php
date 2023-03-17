<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield("title") - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('/assets/img/logostiper.ico') }}" />
    <link rel="icon" href="{{ URL::asset('/assets/img/logostiper.ico') }}" type="image/x-icon"/>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:rgb(233, 10, 21);
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:22px;
}
    </style>
</head>

<body class="font-sans antialiased">
    <x-banner />
    <div class="min-h-screen bg-grey-100">
        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @stack('modals')
    @livewireScripts
</body>

</html>
