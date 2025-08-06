@props(['heading'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $heading }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-5xl mx-auto">
        {{ $slot }}
    </div>
</body>
</html>