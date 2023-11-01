<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title> PEMOGRAMAN 3.COM</title>
    <style>
        /* Reset CSS untuk menghapus margin dan padding default */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Style dasar untuk seluruh halaman */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

/* Container utama */
.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

/* Header */
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

/* Judul */
h1 {
    font-size: 24px;
}

/* Tombol dalam menu */
.btn {
    display: block;
    width: 100%;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-align: center;
    text-decoration: none;
    margin-bottom: 10px;
    border: none;
    cursor: pointer;
}

/* Efek hover pada tombol */
.btn:hover {
    background-color: #0056b3;
}

/* Footer */
footer {
    text-align: center;
    margin-top: 20px;
    color: #888;
}

/* Tambahkan gaya khusus untuk tautan */
a {
    text-decoration: none;
    color: #fff;
}

    </style>

</head>
<body>
    <div class="container">
    <header>
    <h1>MENU</H1>
    </header>
    <div class="contain">
        <a href="tampil_barang.php">
        <button class="btn">BARANG</button>
        </a>

        <a href="tampil_kategori.php">
        <button class="btn">KATEGORI</button>
        </a>

        <a href="tampil_member.php">
        <button class="btn">MEMBER</button>
        </a>

        <a href="tampil_penjualann.php">
        <button class="btn">PENJUALAN</button>
        </a>

        <a href="tampil_transaksi.php">
        <button class="btn">TRANSAKSI</button>
        </a>

        <a href="tampil_user.php">
        <button class="btn">USER</button>
        </a>

        <a href="view_report.php">
        <button class="btn">REPORT</button>
        </a>
</div>
<footer>
    Buatan Akna
</footer>
</div>
</body>
</html>


