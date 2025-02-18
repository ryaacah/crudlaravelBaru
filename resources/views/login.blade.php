<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        
        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="nama" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">ID Staff</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
            </div>
        </form>
    </div>

</body>
</html>
