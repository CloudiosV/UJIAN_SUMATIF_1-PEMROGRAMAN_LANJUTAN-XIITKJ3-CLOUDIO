<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white p-6 rounded shadow text-center">
            <img src="{{ $student['foto'] }}" class="w-32 h-32 rounded-full mx-auto mb-2" />

            <h1 class="text-2xl font-bold mt-1">{{ $student['nama'] }}</h1>
            <p class="text-gray-600">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
            <p class="mt-3 text-gray-700">{{ $student['deskripsi'] }}</p>

            <div class="flex justify-center gap-4 mt-6">
                <x-button>Edit Profile</x-button>
                <x-button>Delete</x-button>
            </div>
        </div>
    </div>
</body>
</html>

<script src="https://cdn.tailwindcss.com"></script>