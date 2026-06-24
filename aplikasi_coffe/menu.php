<!DOCTYPE html>
<html>
<head>
    <title>Menu - Coffee Shop App</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 40px;
        }
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.25);
            width: 250px;
            text-align: center;
            padding: 20px;
            transition: 0.3s;
        }
        .card:hover { transform: scale(1.05); }
        .card img {
            width: 100%;
            border-radius: 8px;
        }
        .card h3 {
            margin: 15px 0 5px;
            color: #6f4e37;
        }
        .card p {
            margin: 5px 0;
            font-weight: bold;
        }
        .card button {
            margin-top: 10px;
            background: #6f4e37;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .card button:hover {
            background: #d2691e;
        }
    </style>
</head>
<body>
    <header>
        <h1>🍵 Our Menu</h1>
        <p>Pilih minuman dan makanan favoritmu</p>
    </header>

    <div class="menu-container">
        <!-- Coffee -->
        <div class="card">
            <img src="assets/images/espresso.jpg" alt="Espresso">
            <h3>Espresso</h3>
            <p>Rp25.000</p>
            <button onclick="window.location.href='order.php?menu=Espresso'">Pesan</button>
        </div>

        <div class="card">
            <img src="assets/images/cappuccino.jpg" alt="Cappuccino">
            <h3>Cappuccino</h3>
            <p>Rp30.000</p>
            <button onclick="window.location.href='order.php?menu=Cappuccino'">Pesan</button>
        </div>

        <div class="card">
            <img src="assets/images/latte.jpg" alt="Latte">
            <h3>Latte</h3>
            <p>Rp28.000</p>
            <button onclick="window.location.href='order.php?menu=Latte'">Pesan</button>
        </div>

        <!-- Non-Coffee -->
        <div class="card">
            <img src="assets/images/greentea.jpg" alt="Green Tea">
            <h3>Green Tea</h3>
            <p>Rp22.000</p>
            <button onclick="window.location.href='order.php?menu=Green Tea'">Pesan</button>
        </div>

        <!-- Bakery -->
        <div class="card">
            <img src="assets/images/croissant.jpg" alt="Croissant">
            <h3>Croissant</h3>
            <p>Rp20.000</p>
            <button onclick="window.location.href='order.php?menu=Croissant'">Pesan</button>
        </div>
    </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="order.php">Order</a>
        <a href="review.php">Review</a>
        <a href="contact.php">Contact</a>
    </nav>
</body>
</html>
