<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { width: 50%; margin-top: 20px; }
        td { padding: 8px; }
    </style>
</head>
<body>

<h1>Data Biodata</h1>

<table>
    <tr><td>Nama</td><td>: {{ $nama }}</td></tr>
    <tr><td>Umur</td><td>: {{ $umur }} tahun</td></tr>
    <tr><td>Alamat</td><td>: {{ $alamat }}</td></tr>
    <tr><td>Email</td><td>: {{ $email }}</td></tr>
    <tr><td>No. Telepon</td><td>: {{ $telepon }}</td></tr>
</table>

<a href="{{ url('/') }}">Kembali ke Home</a>

</body>
</html>
