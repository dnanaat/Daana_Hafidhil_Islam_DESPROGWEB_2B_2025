<?php include 'includes/header.php'; ?>

<?php
$id = $_GET['id'] ?? '';
$products = [
    "p1" => ["name"=>"Rupa Classic - Lime","price"=>"Rp 899.000","img"=>"img/shoesLime.png"],
    "p2" => ["name"=>"Rupa Classic - Pink","price"=>"Rp 899.000","img"=>"img/shoesPink.png"],
    "p3" => ["name"=>"Rupa Classic - Mint","price"=>"Rp 899.000","img"=>"img/shoesMint.png"],
    "p4" => ["name"=>"Rupa Classic - Tan","price"=>"Rp 899.000","img"=>"img/shoesTan.png"],
    "p5" => ["name"=>"Rupa T-Shirt - Black","price"=>"Rp 227.000","img"=>"img/tshirt2.png"],
    "p6" => ["name"=>"Rupa Cap - Yellow","price"=>"Rp 399.000","img"=>"img/cap1.png"],
    "p7" => ["name"=>"Rupa Denim","price"=>"Rp 399.000","img"=>"img/pants2.png"],
    "p8" => ["name"=>"Rupa Hoodie - Blue","price"=>"Rp 399.000","img"=>"img/hoodie.png"],
    "s1" => ["name"=>"Rupa Classic - Black","price"=>"Rp 799.000","img"=>"img/shoes1.png"],
    "s2" => ["name"=>"Rupa Classic - Red","price"=>"Rp 799.000","img"=>"img/shoes2.png"]
];
$product = $products[$id] ?? null;
$success = false;

// Jika form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $pembayaran = htmlspecialchars($_POST['pembayaran']);
    $success = true;
}
?>

<section class="checkout">
    <h2>Checkout</h2>

    <?php if ($product && !$success): ?>
    <div class="checkout-box">
        <div class="checkout-product">
            <img src="<?= $product['img']; ?>" alt="<?= $product['name']; ?>">
            <div class="product-info">
                <h3><?= $product['name']; ?></h3>
                <p>Harga: <?= $product['price']; ?></p>
            </div>
        </div>

        <form method="post" action="">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" required>

            <label>Alamat Pengiriman</label>
            <textarea name="alamat" required></textarea>

            <label>Metode Pembayaran</label>
            <select name="pembayaran" required>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="COD (Bayar di Tempat)">COD (Bayar di Tempat)</option>
                <option value="E-Wallet">E-Wallet</option>
            </select>

            <button type="submit" class="btn-buy">Pesan Sekarang</button>
        </form>
    </div>

    <?php elseif ($success): ?>
    <div class="payment-success">
        <h3>Pembayaran Berhasil!</h3>
        <p>Terima kasih telah berbelanja di RupaWear!</p>

        <div class="transaction-details">
            <h4>Detail Transaksi:</h4>
            <ul>
                <li><strong>Nama :</strong> <?= $nama; ?></li>
                <li><strong>Alamat :</strong> <?= $alamat; ?></li>
                <li><strong>Produk :</strong> <?= $product['name']; ?></li>
                <li><strong>Harga :</strong> <?= $product['price']; ?></li>
                <li><strong>Metode Pembayaran :</strong> <?= $pembayaran; ?></li>
                <li><strong>Status :</strong> Selesai</li>
            </ul>
        </div>
        <br>
        <a href="products.php" class="btn-buy">Kembali ke Produk</a>
    </div>

    <?php else: ?>
        <p>Produk tidak ditemukan.</p>
    <?php endif; ?>
</section>

<?php include 'includes/footer.php'; ?>
