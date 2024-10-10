<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Pemesanan</title>
</head>
<body>
    <h1>Terima kasih!</h1>
    <p>Pemesanan Anda telah berhasil.</p>
    <p>{{ session('success') }}</p>
    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
</body>
</html>
