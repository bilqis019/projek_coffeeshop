<?php
$nama   = $_POST['nama'];
$menu   = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$metode = $_POST['metode'];

// Harga produk
$harga = 0;
switch($menu){
    case "Espresso": $harga = 25000; break;
    case "Cappuccino": $harga = 30000; break;
    case "Latte": $harga = 28000; break;
    case "Green Tea": $harga = 22000; break;
    case "Croissant": $harga = 20000; break;
}
$total = $jumlah * $harga;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Pesanan</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .confirm-box {
            background:#fff3e0;
            padding:40px;
            border-radius:12px;
            box-shadow:0 6px 12px rgba(0,0,0,0.25);
            width:500px;
            margin:60px auto;
            text-align:center;
        }
        .confirm-box h2 { color:#6f4e37; }
        .confirm-box p { font-size:18px; margin:10px 0; }
        .confirm-box a {
            display:inline-block;
            margin-top:20px;
            background:#6f4e37;
            color:white;
            padding:12px 20px;
            border-radius:8px;
            text-decoration:none;
        }
        .confirm-box a:hover { background:#d2691e; }
    </style>
</head>
<body>
    <div class="confirm-box">
        <h2>✅ Pesanan Berhasil!</h2>
        <p><b>Nama:</b> <?php echo $nama; ?></p>
        <p><b>Menu:</b> <?php echo $menu; ?></p>
        <p><b>Jumlah:</b> <?php echo $jumlah; ?></p>
        <p><b>Total Bayar:</b> Rp<?php echo number_format($total,0,',','.'); ?></p>
        <p><b>Metode Pembayaran:</b> <?php echo $metode; ?></p>
        <hr>
        <p>Silakan lanjutkan pembayaran melalui <b><?php echo $metode; ?></b>.<br>
        Jika Cash, bayar langsung di kasir.<br>
        Jika QRIS/OVO/Dana, scan QR code di aplikasi.</p>
        <a href="menu.php">← Kembali ke Menu</a>
    </div>
</body>
</html>
