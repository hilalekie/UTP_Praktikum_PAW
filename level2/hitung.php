<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

$harga = 0;
if ($menu == "Pizza Segitiga Polus") {
    $harga = 25000;
} elseif ($menu == "Susu Elektrik Electrical") {
    $harga = 18000;
} elseif ($menu == "Space Donut Oxygen") {
    $harga = 15000;
} elseif ($menu == "Jus Berry MedBay") {
    $harga = 20000;
} elseif ($menu == "Emergency Steak Navigation") {
    $harga = 45000;
}
$subtotal = $harga * $jumlah;


$diskon = 0;
if ($kategori == "Crewmate" && $jumlah > 3) {
    $diskon = $subtotal * 15 /100;
}


$total = $subtotal;
$total = $total - $diskon;


$valid = true;
$pesan = "";
if ($jumlah <= 0) {
    $valid = false;
    $pesan = "Jumlah pesanan harus lebih dari 0.";
}
