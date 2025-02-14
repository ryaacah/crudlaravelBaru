<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="logo">MyApp</a>
        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/profile') }}">Profile</a>
        </div>
    </nav>

    <!-- Profile Card -->
    <div class="container">
        <div class="profile-card">
            <h2>Profile</h2>
            <div class="profile-info">
                <p><strong>Nama:</strong> Raya Cahya Nurani</p>
                <p><strong>Jabatan:</strong> Admin</p>
            </div>
            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>

</body>

</html>
