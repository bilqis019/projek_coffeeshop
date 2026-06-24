<!DOCTYPE html>
<html>
<head>
    <title>Contact - Coffee Shop App</title>
    <style>
        body { font-family: Arial, sans-serif; background:#fdf6f0; margin:0; }
        header { background:#6f4e37; color:white; padding:20px; text-align:center; }
        .container {
            width:600px; margin:40px auto;
            background:#fff8f0; padding:30px;
            border-radius:12px; box-shadow:0 6px 12px rgba(0,0,0,0.25);
        }
        h2 { color:#6f4e37; text-align:center; }
        label { display:block; margin-top:15px; font-weight:bold; color:#6f4e37; }
        input, textarea {
            width:100%; padding:10px; margin-top:5px;
            border-radius:6px; border:1px solid #ccc;
        }
        button {
            margin-top:20px; width:100%;
            background:#d2691e; color:white;
            border:none; padding:12px; border-radius:8px;
            cursor:pointer; font-size:16px;
        }
        button:hover { background:#ff8c42; }
        nav {
            background:#6f4e37; padding:10px; text-align:center;
            position:fixed; bottom:0; left:0; right:0;
        }
        nav a { color:white; margin:0 10px; text-decoration:none; }
        nav a:hover { text-decoration:underline; }
    </style>
</head>
<body>
    <header>
        <h1>📩 Hubungi Kami</h1>
    </header>

    <div class="container">
        <form method="POST" action="contact_confirm.php">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Pesan:</label>
            <textarea name="pesan" rows="4" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="order.php">Order</a>
        <a href="review.php">Review</a>
        <a href="about.php">About Us</a>
    </nav>
</body>
</html>
