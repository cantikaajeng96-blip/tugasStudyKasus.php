<DOCTYPE html>
<html>
    <head>
        <title> Sewa Villa </title>
</head>

<body>
    <h2> form Sewa Villa Sejuk Asri </h2>
    <form action="proses.php" method="post">

Nama Penyewa :
<input type="text" name="nama"><br><br>

Jenis Villa :
<select name="villa">
    <option value="standard">standard</option>
    <option value="Deluxe">Deluxe</option>
    <option value="Family">Family</option>
</select>

<?php

$nama = $_POST['nama'];
$villa = $_POST['villa'];
$malam = $_POST['malam'];

// Menentukan harga villa
if ($villa == "Standard") {
    $harga = 350000;
} elseif ($villa == "Deluxe") {
    $harga = 550000;
} else {
    $harga = 800000;
}

// Menghitung total biaya
$total = $harga * $malam;

// Percabangan diskon
if ($malam >= 3) {
    $diskon = $total * 0.15;
} else {
    $diskon = 0;
}

// Total bayar
$bayar = $total - $diskon;

// Menampilkan hasil
echo "<h2>Struk Sewa Villa</h2>";
echo "Nama Penyewa : $nama <br>";
echo "Jenis Villa : $villa <br>";
echo "Lama Menginap : $malam malam <br>";
echo "Harga per Malam : Rp " . number_format($harga,0,",",".") . "<br>";
echo "Total Sebelum Diskon : Rp " . number_format($total,0,",",".") . "<br>";
echo "Diskon : Rp " . number_format($diskon,0,",",".") . "<br>";
echo "<b>Total Bayar : Rp " . number_format($bayar,0,",",".") . "</b>";

?>

// Jawaban bengkel 

<!DOCTYPE html>
<html>
<head>
    <title>Bengkel Mobil</title>
</head>
<body>

<h2>Form Servis Bengkel Mobil</h2>

<form action="proses.php" method="post">
    Nama Pelanggan :
    <input type="text" name="nama" required><br><br>

    Nomor Polisi :
    <input type="text" name="nopol" required><br><br>

    Jenis Servis :
    <select name="servis">
        <option value="Ganti Oli">Ganti Oli</option>
        <option value="Tune Up">Tune Up</option>
        <option value="Servis Lengkap">Servis Lengkap</option>
    </select><br><br>

    <input type="submit" value="Hitung">
</form>

</body>
</html>


<?php

$nama = $_POST['nama'];
$nopol = $_POST['nopol'];
$servis = $_POST['servis'];

// Menentukan harga servis
if ($servis == "Ganti Oli") {
    $harga = 150000;
} elseif ($servis == "Tune Up") {
    $harga = 300000;
} else {
    $harga = 500000;
}

// Menentukan diskon
if ($harga > 400000) {
    $diskon = $harga * 0.10;
} else {
    $diskon = 0;
}

// Menghitung total bayar
$total = $harga - $diskon;

// Menampilkan hasil
echo "<h2>Hasil Perhitungan</h2>";
echo "Nama Pelanggan : $nama <br>";
echo "Nomor Polisi : $nopol <br>";
echo "Jenis Servis : $servis <br>";
echo "Biaya Servis : Rp " . number_format($harga, 0, ",", ".") . "<br>";
echo "Diskon : Rp " . number_format($diskon, 0, ",", ".") . "<br>";
echo "<b>Total Bayar : Rp " . number_format($total, 0, ",", ".") . "</b>";

?>

// Jawaban Rental 

<!DOCTYPE html>
<html>
<head>
    <title>Rental PlayStation</title>
</head>
<body>

<h2>Form Rental PlayStation</h2>

<form action="proses.php" method="post">

    Nama Pelanggan :
    <input type="text" name="nama" required><br><br>

    Jenis PlayStation :
    <select name="ps">
        <option value="PS3">PS3</option>
        <option value="PS4">PS4</option>
        <option value="PS5">PS5</option>
    </select><br><br>

    Lama Bermain (Jam) :
    <input type="number" name="jam" required><br><br>

    <input type="submit" value="Hitung">

</form>

</body>
</html>

<?php

$nama = $_POST['nama'];
$ps = $_POST['ps'];
$jam = $_POST['jam'];

// Menentukan harga per jam
if ($ps == "PS3") {
    $harga = 8000;
} elseif ($ps == "PS4") {
    $harga = 12000;
} else {
    $harga = 18000;
}

// Menghitung total harga
$total = $harga * $jam;

// Percabangan diskon
if ($jam > 5) {
    $diskon = $total * 0.10;
} else {
    $diskon = 0;
}

// Total yang harus dibayar
$totalBayar = $total - $diskon;

// Menampilkan hasil
echo "<h2>Struk Rental PlayStation</h2>";
echo "Nama Pelanggan : $nama <br>";
echo "Jenis PlayStation : $ps <br>";
echo "Lama Bermain : $jam Jam <br>";
echo "Harga per Jam : Rp " . number_format($harga, 0, ",", ".") . "<br>";
echo "Total Sebelum Diskon : Rp " . number_format($total, 0, ",", ".") . "<br>";
echo "Diskon : Rp " . number_format($diskon, 0, ",", ".") . "<br>";
echo "<b>Total Bayar : Rp " . number_format($totalBayar, 0, ",", ".") . "</b>";

?>
