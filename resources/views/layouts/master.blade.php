<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSL Connect</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    
    </style>
   
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('build/assets/app-B04UeET4.css') }}">    
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <script src="{{ asset('build/assets/app-W5RL8rTj.js') }}" defer></script>
            

</head>
<body>
    @yield('body')
    <wireui:scripts />
    @livewireScripts
</body>
</html>