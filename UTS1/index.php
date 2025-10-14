<?php include 'includes/header.php'; ?>

<section class="hero">
    <img src="img/hero_main_page.jpg" alt="Hero Image" class="hero-img">
    <div class="hero-content">
        <h1>Tampil Lebih Menarik<br>dengan RupaWear</h1><br>  
        <p>Brand fashion lokal Indonesia yang menghadirkan gaya modern dengan sentuhan khas Nusantara. 
        Setiap produk kami dibuat dengan bahan berkualitas tinggi dan desain yang nyaman, 
        mendukung gaya hidup aktif dan penuh percaya diri</p>
        <br>
        <a href="#new-arrivals" class="btn">Lihat Koleksi Terbaru</a>
    </div>
</section>

<section id="new-arrivals" class="arrivals">
    <h2>New Shoes Arrivals</h2>
    <div class="product-grid">
        <?php
        $products = [
            ["id"=>"p1","name"=>"Rupa Classic - Lime","price"=>"Rp 899.000","img"=>"img/shoesLime.png"],
            ["id"=>"p2","name"=>"Rupa Classic - Pink","price"=>"Rp 899.000","img"=>"img/shoesPink.png"],
            ["id"=>"p3","name"=>"Rupa Classic - Mint","price"=>"Rp 899.000","img"=>"img/shoesMint.png"],
            ["id"=>"p4","name"=>"Rupa Classic - Tan","price"=>"Rp 899.000","img"=>"img/shoesTan.png"]
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
                </div>
                <br>
            </div>";
        }
        ?>
    </div>
</section>

<section class="category">
  <h2>Products by Category</h2>
  <div class="category-grid">
    <div class="category-item">
      <img src="img/tshirt1.webp" alt="Tops">
      <div class="category-overlay">
        <p>T-Shirt</p>
      </div>
    </div>
    <div class="category-item">
      <img src="img/pants1.webp" alt="Pants">
      <div class="category-overlay">
        <p>Pants</p>
      </div>
    </div>
    <div class="category-item">
      <img src="img/shoes3.webp" alt="Shoes">
      <div class="category-overlay">
        <p>Shoes</p>
      </div>
    </div>
    <div class="category-item">
      <img src="img/cap.webp" alt="Cap">
      <div class="category-overlay">
        <p>Cap</p>
      </div>
    </div>
  </div>
</section>


<section class="made-in">
    <div class="made-text">
        <h1>100% Made in Indonesia</h1>
        <p>
          Rupa adalah perusahaan fashion asli Indonesia yang lahir dari semangat untuk menampilkan keindahan dalam setiap penampilan. Diambil dari kata “rupa” yang berarti wujud, tampilan, atau bentuk, kami percaya bahwa setiap orang berhak mengekspresikan diri melalui busana yang bermakna dan autentik.
          <br><br>Didirikan dengan visi untuk mengangkat kekayaan budaya Indonesia ke dalam gaya modern, Rupa menggabungkan desain kontemporer dengan sentuhan lokal — baik dari segi motif, material, maupun filosofi. Kami bekerja sama dengan pengrajin lokal dan pelaku UMKM untuk menciptakan produk yang tidak hanya bergaya, tetapi juga memberdayakan.
        </p>
    </div>
    <img src="img/madein.jpg" alt="Made in Indonesia">
</section>

<section class="collaborations">
  <h2>Discover Our Collaborations</h2>
  <br>
  <div class="collab-grid">
    <div class="collab-item">
      <img src="img/pestapora.webp" alt="Pestapora">
      <p>Rupa x Pestapora</p>
      <span class="collab-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et malesuada elit.
      </span>
    </div>
    <div class="collab-item">
      <img src="img/vespa.webp" alt="Vespa World Days">
      <p>Rupa x Vespa World Days 2020</p>
      <span class="collab-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et malesuada elit.
      </span>
    </div>
    <div class="collab-item">
      <img src="img/paralympics.jpg" alt="Paralympics">
      <p>Rupa x Paralympics</p>
      <span class="collab-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et malesuada elit.
      </span>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
