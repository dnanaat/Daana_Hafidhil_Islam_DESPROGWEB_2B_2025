<?php include 'includes/header.php'; ?>

<section class="products-page">
    <h2>All Products</h2>
    <div class="product-grid">
        <?php
        $products = [
            ["id"=>"p1","name"=>"Rupa Classic - Lime","price"=>"Rp 899.000","img"=>"img/shoesLime.png"],
            ["id"=>"p2","name"=>"Rupa Classic - Pink","price"=>"Rp 899.000","img"=>"img/shoesPink.png"],
            ["id"=>"p5","name"=>"Rupa T-Shirt - Black","price"=>"Rp 227.000","img"=>"img/tshirt2.png"],
            ["id"=>"p6","name"=>"Rupa Caps - Yellow","price"=>"Rp 129.000","img"=>"img/cap1.png"],
            ["id"=>"p7","name"=>"Rupa Denim","price"=>"Rp 549.000","img"=>"img/pants2.png"],
            ["id"=>"p8","name"=>"Rupa Hoodie - Blue","price"=>"Rp 399.000","img"=>"img/hoodie.png"]
        ];

        foreach ($products as $p) {
            echo "
            <div class='product-card'>
                <img src='{$p['img']}' alt='{$p['name']}'>
                <h3>{$p['name']}</h3>
                <p>{$p['price']}</p>
                <div class='btn-group'>
                    <a href='product-detail.php?id={$p['id']}' class='btn-detail'>Detail</a>
                    <a href='checkout.php?id={$p['id']}' class='btn-buy'>Beli</a>
                </div> <br>
            </div>";
        }
        ?>
    </div>
</section>

<section id="sale" class="sale-section">
    <h2>Sale Items</h2>
    <div class="product-grid">
        <?php
        $sale = [
            ["id"=>"s1","name"=>"Rupa Classic - Black","price"=>"Rp 799.000","img"=>"img/shoes1.png"],
            ["id"=>"s2","name"=>"Rupa Classic - Red","price"=>"Rp 799.000","img"=>"img/shoes2.png"]
        ];

        foreach ($sale as $p) {
            echo "
            <div class='product-card sale'>
                <span class='sale-badge'>SALE</span>
                <img src='{$p['img']}' alt='{$p['name']}'>
                <h3>{$p['name']}</h3>
                <p><del>Rp 899.000</del> {$p['price']}</p>
                <div class='btn-group'>
                    <a href='product-detail.php?id={$p['id']}' class='btn-detail'>Detail</a>
                    <a href='checkout.php?id={$p['id']}' class='btn-buy'>Beli</a>
                </div>
            </div>";
        }
        ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
