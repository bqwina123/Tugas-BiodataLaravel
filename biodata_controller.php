<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Diri</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f4f8;
    margin: 0;
    padding: 0;
}

.container {
    width: 50%;
    margin: 50px auto;
    background-color: #ffffff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    margin-top: 20px;
}

td {
    padding: 10px;
    vertical-align: top;
    color: #555;
}
</style>
</head>
<body>

<?php
// Data biodata
$nama = "Baiq Wina Nurhiladia";
$umur = 22;
$alamat = "Grunung Bayan";
$email = "wina@email.com";
$telepon = "0812-3456-7890";
?>

<div class="container">
    <h1>Biodata Diri</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>: <?= $nama ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: <?= $umur ?> tahun</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?= $alamat ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?= $email ?></td>
        </tr>
        <tr>
            <td>No. Telepon</td>
            <td>: <?= $telepon ?></td>
        </tr>
    </table>
</div>

</body>
</html>
