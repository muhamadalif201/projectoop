<?php

include 'proses.php'; 

    $proses = new beli();
    $proses->setHarga(15420,16130,18310,16510);

    if(isset($_POST['kirim'])) {
        $proses ->jumlah = $_POST['jumlah'];
        $proses ->jenis = $_POST['jenis'];

        $proses -> cetakPembelian();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bahan Bakar Minyak</title>
</head>
<body>
    <center>
    <form method="post" action="">
        <label for="jumlah">Jumlah Liter:</label>
        <input type="number" name="jumlah" required><br><br>

        <label for="jenis">Pilih Tipe Bahan Bakar:</label>
        <select name="jenis" required>
            <option value="SSuper">Shell Super</option>
            <option value="SVPower">Shell V-Power</option>
            <option value="SVPowerDiesel">Shell V-Power Diesel</option>
            <option value="SVPowerNitro">Shell V-Power Nitro</option>
        </select><br><br>

        <input type="submit" name="kirim">
    </form>
</center>
</body>
</html>