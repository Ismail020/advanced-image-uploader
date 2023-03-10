<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Image Uploading with Vue + Laravel</title>
    <meta name="csrf_token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')
</head>

<body>
    <div class="max-w-lg mx-auto mt-24">
        <h1 class="text-4xl font-bold text-center">Image Uploader</h1>
        <div id="app">

        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
