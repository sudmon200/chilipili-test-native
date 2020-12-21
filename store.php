<?php 

include 'config.php';
include 'includes/header.php';


$online_sql = "SELECT * FROM products WHERE category='online_course'";

$online = $connection->query($online_sql);

$montessori_sql = "SELECT * FROM products WHERE category='montessori'";

$montessori = $connection->query($montessori_sql);

$phonics_sql = "SELECT * FROM products WHERE category='phonics'";

$phonics = $connection->query($phonics_sql);

$books_sql = "SELECT * FROM products WHERE category='books'";

$books = $connection->query($books_sql);

$bundles_sql = "SELECT * FROM products WHERE category='bundles'";

$bundles = $connection->query($bundles_sql);


?>

<div class="main-img m-def">
    <img src="media/online course website banner.jpg" alt="banner">
</div>

<div class="bg-image">
    <div class="search">
        <form action="" method="post">
            <input type="text" name="search" id="search" placeholder="Search">
            <button>Search</button>
        </form>
    </div>
    <div class="products">
        <div class="product">
            <h3 class="font1 m-def">Online Courses</h3>
            <div class="prod-cards">
                <div class="prod-card">
                    <img src="media/pink_tower.png" alt="">
                    <p class="prod-title font2" name="prod_title" id="prod_title">Montessori@Home</p>
                    <p class="price font2">9500</p>
                    <p class="learn font3">Learn More</p>
                </div>
                <?php while ($online_row = mysqli_fetch_array($online)): ?>
                <div class="prod-card">
                        <?php $img = $online_row['prod_img1']; ?>
                        <?php $img_src = "media/".$img ; ?>
                    <img src="<?= $img_src ?>" alt="">
                    <a href="products.php?id=<?= $online_row['prod_id'] ?>">
                        <p class="prod-title font2"><?= $online_row['prod_name'] ?></p>
                        <p class="price font2"><?= $online_row['prod_price'] ?></p>
                        <p class="learn font3">Learn More</p>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="product">
            <h3 class="font1 m-def">Montessori@Home</h3>
            <div class="prod-cards">
                <div class="prod-card">
                    <img src="media/pink_tower.png" alt="">
                    <p class="prod-title font2">Montessori@Home</p>
                    <p class="price font2">9500</p>
                    <p class="learn font3">Learn More</p>
                </div>
                <?php while ($montessori_row = mysqli_fetch_array($montessori)): ?>
                <div class="prod-card">
                        <?php $img = $montessori_row['prod_img1']; ?>
                        <?php $img_src = "media/".$img ; ?>
                    <img src="<?= $img_src ?>" alt="">
                    <a href="products.php?id=<?= $montessori_row['prod_id'] ?>">
                        <p class="prod-title font2"><?= $montessori_row['prod_name'] ?></p>
                        <p class="price font2"><?= $montessori_row['prod_price'] ?></p>
                        <p class="learn font3">Learn More</p>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="product">
            <h3 class="font1 m-def">Bundles & Packages</h3>
            <div class="prod-cards">
                <div class="prod-card">
                    <img src="media/pink_tower.png" alt="">
                    <p class="prod-title font2">Montessori@Home</p>
                    <p class="price font2">9500</p>
                    <p class="learn font3">Learn More</p>
                </div>
                <?php while ($bundles_row = mysqli_fetch_array($bundles)): ?>
                <div class="prod-card">
                        <?php $img = $bundles_row['prod_img1']; ?>
                        <?php $img_src = "media/".$img ; ?>
                    <img src="<?= $img_src ?>" alt="">
                    <a href="products.php?id=<?= $bundles_row['prod_id'] ?>">
                        <p class="prod-title font2"><?= $bundles_row['prod_name'] ?></p>
                        <p class="price font2"><?= $bundles_row['prod_price'] ?></p>
                        <p class="learn font3">Learn More</p>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="product">
            <h3 class="font1 m-def">Phonics</h3>
            <div class="prod-cards">
                <div class="prod-card">
                    <img src="media/pink_tower.png" alt="">
                    <p class="prod-title font2">Montessori@Home</p>
                    <p class="price font2">9500</p>
                    <p class="learn font3">Learn More</p>
                </div>
                <?php while ($phonics_row = mysqli_fetch_array($phonics)): ?>
                <div class="prod-card">
                        <?php $img = $phonics_row['prod_img1']; ?>
                        <?php $img_src = "media/".$img ; ?>
                    <img src="<?= $img_src ?>" alt="">
                    <a href="products.php?id=<?= $phonics_row['prod_id'] ?>">
                        <p class="prod-title font2"><?= $phonics_row['prod_name'] ?></p>
                        <p class="price font2"><?= $phonics_row['prod_price'] ?></p>
                        <p class="learn font3">Learn More</p>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="product">
            <h3 class="font1 m-def">Books</h3>
            <div class="prod-cards">
                <div class="prod-card">
                    <img src="media/pink_tower.png" alt="">
                    <p class="prod-title font2">Montessori@Home</p>
                    <p class="price font2">9500</p>
                    <p class="learn font3">Learn More</p>
                </div>
                <?php while ($books_row = mysqli_fetch_array($books)): ?>
                <div class="prod-card">
                        <?php $img = $books_row['prod_img1']; ?>
                        <?php $img_src = "media/".$img ; ?>
                    <img src="<?= $img_src ?>" alt="">
                    <a href="products.php?id=<?= $books_row['prod_id'] ?>">
                        <p class="prod-title font2"><?= $books_row['prod_name'] ?></p>
                        <p class="price font2"><?= $books_row['prod_price'] ?></p>
                        <p class="learn font3">Learn More</p>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php 

include 'includes/footer.php';

?>