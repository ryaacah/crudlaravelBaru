<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Keluar Kantor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <nav class="flex justify-between items-center bg-gray-800 p-4 text-white">
        <a href="#" class="text-xl font-bold">MyApp</a>
        <div class="space-x-4">
            <a href="{{ url('/') }}" class="hover:underline">Home</a>
            <a href="{{ url('/profile') }}" class="hover:underline">Profile</a>
        </div>
    </nav>

    <div class="max-w-lg mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-center mb-4">Form Keluar Kantor</h2>
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block">Nama</label>
                <input type="text" name="nama" required value="{{ old('nama') }}" class="w-full border p-2 rounded">
                @error('nama') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div class="mb-4">
                <label class="block">Jabatan</label>
                <input type="text" name="jabatan" required value="{{ old('jabatan') }}" class="w-full border p-2 rounded">
                @error('jabatan') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div class="mb-4">
                <label class="block">Tanggal Keluar</label>
                <input type="date" name="tanggal" required value="{{ old('tanggal') }}" class="w-full border p-2 rounded">
                @error('tanggal') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div class="mb-4">
                <label class="block">Jam Keluar</label>
                <input type="time" name="jam_keluar" required value="{{ old('jam_keluar') }}" class="w-full border p-2 rounded">
                @error('jam_keluar') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div class="mb-4">
                <label class="block">Jam Kembali</label>
                <input type="time" name="jam_masuk" required value="{{ old('jam_masuk') }}" class="w-full border p-2 rounded">
                @error('jam_masuk') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div class="mb-4">
                <label class="block">Keperluan</label>
                <select name="keperluan" id="keperluan" onchange="toggleKeterangan()" required class="w-full border p-2 rounded">
                    <option value="">Pilih Keperluan</option>
                    <option value="Dinas" {{ old('keperluan') == 'Dinas' ? 'selected' : '' }}>Dinas</option>
                    <option value="Pribadi" {{ old('keperluan') == 'Pribadi' ? 'selected' : '' }}>Pribadi</option>
                </select>
                @error('keperluan') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div class="mb-4" id="keterangan_div" style="display: none;">
                <label class="block">Tujuan Keluar</label>
                <input type="text" name="keterangan" value="{{ old('keterangan') }}" class="w-full border p-2 rounded">
                @error('keterangan') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div class="mb-4">
                <label class="block">Pemberi Izin</label>
                <input type="text" name="pemberi_izin" required value="{{ old('pemberi_izin') }}" class="w-full border p-2 rounded">
                @error('pemberi_izin') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <script>
        function toggleKeterangan() {
            var keperluan = document.getElementById("keperluan").value;
            var keteranganDiv = document.getElementById("keterangan_div");
            keteranganDiv.style.display = (keperluan === "Dinas" || keperluan === "Pribadi") ? "block" : "none";
        }
        window.onload = function() {
            toggleKeterangan();
        };
    </script>
</body>
</html>