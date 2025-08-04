<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students List</title>
</head>
<body>
    {{-- <ul>
        @foreach ($students as $s)
            <li>{{ $s }}</li>
        @endforeach
    </ul> --}}

    <x-card heading="Daftar Siswa">
        <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
        <div class="grid grid-cols-2 gap-4">
            @foreach ($students as $student)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ $student['foto'] }}" class="w-full rounded mb-2" />
                <h2 class="text-xl font-semibold">{{ $student['nama'] }}</h2>
                <p class="text-gray-600">{{ $student['kelas'] }}</p>
                <p class="mt-2 text-sm">{{ $student['hobi'] }}</p>
                <x-button class="mt-3" onclick="location.href='/students/{{ $student['id'] }}'">Lihat Profil</x-button>
            </div>
            @endforeach
        </div>
    </x-card>
</body>
</html>