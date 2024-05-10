<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- fonts -->
   
    @vite('resources/scss/app.scss', 'resources/js/app.js')

    @yield("head")
    
</head>

<body>

    @include('partial.header')

    @yield("content")

</body>

</html>