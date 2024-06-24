<style>
        body{
            display:flex;
            justify-content:center;
            flex-direction:column;
        }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
    <center>
        <form method="post" action="">
            <label for="nama">Nama Pelanggan : </label>
            <input type="text" name="nama" required>
            <br></br>
            <label for="waktu">Lama Waktu Rental (Per Hari) :</label>
            <input type="text" name="waktu" required>
            <br></br>
            <label for="jenis">Jenis Motor :</label>
            <select name="jenis">
                <option value="Nmax">Astrea</option>
                <option value="Aerox">Aerox</option>
                <option value="Zx25r">Win100</option>
                <option value="Vario">Scoopy</option>
            </select>
<br></br>

            <input type="submit" name="kirim">
        </form>
        </center>
</body>
</html>



<?php

include 'proses.php';

$proses = new Rental();
$proses->setHarga(110000, 100000, 150000, 90000);

if (isset($_POST['kirim'])) {
    $proses->Nama = $_POST['nama'];
    $proses->Waktu = $_POST['waktu'];
    $proses->Jenis = $_POST['jenis'];

    $proses->CetakRental();
}
?>