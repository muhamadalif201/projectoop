<!DOCTYPE html>
<html>
<head>
    <title>Kasir</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>

   body {
    font-family: Arial, sans-serif;
    margin: 120px auto;
    padding: 20px;
    display:flex;
    text-align:center;
    justify-content:center;
    background-color: #0874f8;
}

h2 {
    color: #333;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

form {
    max-width: 400px;
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="number"] {
    width: 50px;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}


</style>
</head>
<body>
    <div class="container">
        <h1>Kasir</h1>
        <form method="post">
            <table>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <td>Ayam</td>
                    <td>10.000</td>
                    <td><input type="number" name="ayam" min="0" value="0"></td>
                </tr>
                <tr>
                    <td>Sapi</td>
                    <td>30.000</td>
                    <td><input type="number" name="sapi" min="0" value="0"></td>
                </tr>
                <tr>
                    <td>Kambing</td>
                    <td>20.000</td>
                    <td><input type="number" name="kambing" min="0" value="0"></td>
                </tr>
                <tr>
                    <td>Bebek</td>
                    <td>15.000</td>
                    <td><input type="number" name="bebek" min="0" value="0"></td>
            </table>
            <input type="submit" name="submit" value="Hitung Total">
        </form>

        <?php
        if(isset($_POST['submit'])){
            $pensil = $_POST['ayam'];
            $penghapus = $_POST['sapi'];
            $penggaris = $_POST['kambing'];
            $pulpen = $_POST['bebek'];

            $total_pensil = $pensil * 10000;
            $total_penghapus = $penghapus * 30000;
            $total_penggaris = $penggaris * 20000;
            $total_pulpen = $pulpen * 15000;

            $total_harga = $total_pensil + $total_penghapus + $total_penggaris +$total_pulpen;

            echo "<h2>Struk Pembayaran</h2>";
            echo "<table>";
            echo "<tr><th>Nama Barang</th><th>Jumlah</th><th>Total Harga</th></tr>";
            echo "<tr><td>Ayam</td><td>$pensil</td><td>$total_pensil</td></tr>";
            echo "<tr><td>Sapi</td><td>$penghapus</td><td>$total_penghapus</td></tr>";
            echo "<tr><td>Kambing</td><td>$penggaris</td><td>$total_penggaris</td></tr>";
            echo "<tr><td>Bebek</td><td>$pulpen</td><td>$total_pulpen</td></tr>";
            echo "<tr class='total'><td colspan='2'>Total</td><td>$total_harga</td></tr>";
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>