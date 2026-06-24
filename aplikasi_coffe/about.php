<!DOCTYPE html>
<html>
<head>
    <title>About Us - Coffee Shop App</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .about-box {
            background:#fff8f0;
            padding:40px;
            border-radius:12px;
            box-shadow:0 6px 12px rgba(0,0,0,0.25);
            width:700px;
            margin:60px auto;
            text-align:center;
        }
        .about-box h2 { color:#6f4e37; margin-bottom:20px; }
        .about-box p { font-size:18px; line-height:1.6; margin-bottom:20px; }
        .team {
            display:flex;
            justify-content:center;
            gap:30px;
            margin-top:30px;
        }
        .member {
            background:white;
            border-radius:10px;
            box-shadow:0 4px 8px rgba(0,0,0,0.2);
            padding:20px;
            width:200px;
        }
        .member img {
            width:100%;
            border-radius:50%;
            margin-bottom:10px;
        }
        .member h3 { margin:0; color:#6f4e37; }
        .member p { font-size:14px; color:#555; }
    </style>
</head>
<body>
    <div class="about-box">
        <h2> Tentang Kami</h2>
        <p>
            Coffee Shop App adalah aplikasi sederhana untuk memesan kopi dan makanan favoritmu.  
            Kami percaya bahwa setiap cangkir kopi membawa kebahagiaan, dan setiap pelanggan adalah bagian dari keluarga kami.
        </p>
        <p>
            Visi kami adalah menghadirkan pengalaman ngopi yang hangat, mudah, dan modern.  
            Misi kami adalah menyediakan menu berkualitas dengan pelayanan terbaik.
        </p>

        <h2> Tim Kami</h2>
        <div class="team">
            <div class="member">
                <img src="uploads/foto/barista1.png" alt="Barista 1">
                <h3>Naufal</h3>
                <p>Head Barista</p>
            </div>
            <div class="member">
                <img src="uploads/foto/barista2.png" alt="Barista 2">
                <h3>Raka</h3>
                <p>Customer Service</p>
            </div>
            <div class="member">
                <img src="uploads/foto/barista3.png" alt="Barista 3">
                <h3>Sinta</h3>
                <p>Manager</p>
            </div>
        </div>
    </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="order.php">Order</a>
        <a href="review.php">Review</a>
        <a href="contact.php">Contact</a>
    </nav>
</body>
</html>
