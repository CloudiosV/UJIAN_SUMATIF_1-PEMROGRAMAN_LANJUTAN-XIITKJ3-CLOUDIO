<x-card heading="Daftar Siswa">
    <h1 class="text-2xl font-bold mb-6">Daftar Siswa</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @foreach ($students as $student)
        <div onclick="location.href='/students/{{ $student['id'] }}'"
             class="bg-white p-4 rounded-lg shadow hover:shadow-md border hover:border-blue-500 cursor-pointer transition">
            <div class="flex items-center gap-4">
                <img src="{{ $student['foto'] }}" class="w-16 h-16 rounded-full object-cover" />
                <div>
                    <h2 class="text-lg font-semibold">{{ $student['nama'] }}</h2>
                    <p class="text-sm text-gray-500">{{ '@' . $student['username'] }}</p>
                    <p class="text-sm mt-1">{{ \Illuminate\Support\Str::limit($student['deskripsi'], 50) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-card>

<script src="https://cdn.tailwindcss.com"></script>
