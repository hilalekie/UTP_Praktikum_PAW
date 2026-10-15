<?php
// Level 4: Kerjakan mulai darisini
if (isset($_COOKIE["nama_pelanggan"])) {
    echo "<p>Selamat datang kembali di Cafeteria, " . htmlspecialchars($_COOKIE["nama_pelanggan"]) . "! Tetap waspada terhadap Impostor!</p>";
    return; 
}
    


