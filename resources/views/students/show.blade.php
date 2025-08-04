<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    <x-card heading="Profil Siswa">
        <div class="bg-white p-6 rounded shadow">
            <img src="{{ $student['foto'] }}" class="w-full rounded mb-4" />
            <h1 class="text-2xl font-bold">{{ $student['nama'] }}</h1>
            <p class="text-gray-700 mb-1">Kelas: {{ $student['kelas'] }}</p>
            <p class="text-gray-700 mb-1">Hobi: {{ $student['hobi'] }}</p>
            <p class="text-gray-700 mt-2">{{ $student['deskripsi'] }}</p>
            <x-button class="mt-4" onclick="location.href='/students'">Edit Profile</x-button>
            <x-button class="mt-4" onclick="location.href='/students'">Delete</x-button>
        </div>
    </x-card>
</body>
</html>