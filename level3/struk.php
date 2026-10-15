<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    echo "";
    echo "<table>";
    echo "<tr><td>Nama Kru</td><td>" . htmlspecialchars($_SESSION["nama"]) . "</td></tr>";
    echo "<tr><td>Ransum</td><td>" . $_SESSION["menu"] . "</td></tr>";
    echo "<tr><td>Jumlah Porsi</td><td>" . $_SESSION["jumlah"] . "</td></tr>";
    echo "<tr><td>Kategori Kru</td><td>" . $_SESSION["kategori"] . "</td></tr>";
    echo "<tr><td>Subtotal</td><td>Rp" . number_format($_SESSION["subtotal"], 0, ",", ".") . "</td></tr>";
    echo "<tr><td>Diskon</td><td>Rp" . number_format($_SESSION["diskon"], 0, ",", ".") . "</td></tr>";
    echo "<tr><td>Total Pembayaran</td><td>Rp" . number_format($_SESSION["total"], 0, ",", ".") . "</td></tr>";

    // Satu baris status pengambilan untuk setiap porsi
    for ($i = 1; $i <= $_SESSION["jumlah"]; $i++) {
        echo "<tr><td>Status Porsi ke-" . $i . "</td><td>Belum diambil</td></tr>";
    }
    echo "</table>";
}
