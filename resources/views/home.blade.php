<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Rekap Pegawai Keluar</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script> 
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4 text-white flex justify-between">
        <a href="#" class="text-lg font-bold">Pegawai Keluar</a>
        <div>
            <a href="{{ url('/') }}" class="px-4">Home</a>
            <a href="{{ url('/profile') }}" class="px-4">Profile</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto mt-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex justify-between mb-4">
                <h2 class="text-xl font-semibold">Rekap Pegawai Keluar</h2>
                <a href="{{ route('pegawai.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add</a>
            </div>
            
            <!-- Table -->
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">Jabatan</th>
                        <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                        <th class="border border-gray-300 px-4 py-2">Jam Masuk</th>
                        <th class="border border-gray-300 px-4 py-2">Jam Keluar</th>
                        <th class="border border-gray-300 px-4 py-2">Keperluan</th>
                        <th class="border border-gray-300 px-4 py-2">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawais as $i)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $i->nama }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $i->jabatan }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $i->tanggal }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $i->jam_masuk }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $i->jam_keluar }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $i->keperluan }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $i->keterangan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @if(count($pegawais) == 0)
                <p class="text-center text-gray-500 mt-4">Tidak ada data pegawai keluar.</p>
            @endif
        </div>
    </div>

</body>
</html>
