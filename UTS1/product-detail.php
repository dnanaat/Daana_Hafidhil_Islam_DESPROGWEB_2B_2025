<?php include 'includes/header.php'; ?>

<?php
$id = $_GET['id'] ?? '';

$products = [
    "p1" => ["name"=>"Rupa Classic - Lime","price"=>"Rp 899.000","desc"=>"Sepatu streetwear ringan dan stylish, cocok untuk aktivitas harian.","img"=>"img/shoesLime.png"],
    "p2" => ["name"=>"Rupa Classic - Pink","price"=>"Rp 899.000","desc"=>"Warna cerah dan desain modern untuk gaya kasualmu.","img"=>"img/shoesPink.png"],
    "p3" => ["name"=>"Rupa Classic - Mint","price"=>"Rp 899.000","desc"=>"Tampil segar dan sporty dengan warna mint lembut.","img"=>"img/shoesMint.png"],
    "p4" => ["name"=>"Rupa Classic - Tan","price"=>"Rp 899.000","desc"=>"Tampilan klasik dengan kenyamanan maksimal.","img"=>"img/shoesTan.png"],
    "p5" => ["name"=>"Rupa T-Shirt - Black","price"=>"Rp 227.000","desc"=>"Kaos hitam premium dari bahan katun lokal berkualitas.","img"=>"img/tshirt2.png"],
    "p6" => ["name"=>"Rupa Cap - Yellow","price"=>"Rp 399.000","desc"=>"Hoodie abu-abu lembut dengan potongan oversize.","img"=>"img/cap1.png"],
    "p7" => ["name"=>"Rupa Denim","price"=>"Rp 399.000","desc"=>"Hoodie abu-abu lembut dengan potongan oversize.","img"=>"img/pants2.png"],
    "p8" => ["name"=>"Rupa Hoodie - Blue","price"=>"Rp 399.000","desc"=>"Hoodie abu-abu lembut dengan potongan oversize.","img"=>"img/hoodie.png"],
    "s1" => ["name"=>"Rupa Classic - Black","price"=>"Rp 799.000","desc"=>"Sepatu dengan model klasik yang elegan untuk berbagai acara.","img"=>"img/shoes1.png"],
    "s2" => ["name"=>"Rupa Classic - Red","price"=>"Rp 799.000","desc"=>"Sepatu dengan model klasik yang elegan untuk berbagai acara.","img"=>"img/shoes2.png"]
];

$product = $products[$id] ?? null;
?>

<?php if ($product): ?>
<section class="product-detail">
    <div class="detail-container">
        <img class="dgambar" height="300px" src="<?= $product['img']; ?>" alt="<?= $product['name']; ?>">
        <div class="detail-info">
            <br><br>
            <h2><?= $product['name']; ?></h2>
            <p class="price"><?= $product['price']; ?></p>
            <p><?= $product['desc']; ?></p>
            <br>
            <a href="checkout.php?id=<?= $id; ?>" class="btn-buy">Beli Sekarang</a>
        </div>
    </div>
</section>
<?php else: ?>
<section class="not-found">
    <h2>Produk tidak ditemukan</h2>
</section>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
