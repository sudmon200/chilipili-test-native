<?php

include 'config.php';
include 'includes/header.php';

$id = $_GET['id'];

$sql = "SELECT * FROM blog_post WHERE postID='$id'";

$result = $connection->query($sql);

?>

<div class="container" style="height:50px;">
</div>
<div class="container header-top m-def">
    <h3 class="font1">
        Blog
    </h3>
</div>

<div class="font1 m-def text-center">
    <form action="blog-search.php" method="POST">
        <div class="search-form">
            <form action="blog-search.php" method="get">
                <input type="text" name="search" id="search" placeholder="Search">
                <input type="button" value="Submit">
            </form>
        </div>

    </form>
</div>
<div class="blog-main m-side">
    <div class="blog-internal-content">
        <?php while ($row = mysqli_fetch_array($result)) : ?>
            <div class="top-section-blog">
                <div class="second-date-border">
                    <div class="second-date-box">
                        <p class="second-date"><?= $row['postDate']; ?></p>
                    </div>
                </div>
                <p class="font2">Mins of Read: <a href="blog-search.php?cat=<?= $row['mins_read'] ?>"><?= $row['mins_read'] ?></a></p>
                <div>
                    <p class="font2">POSTED IN: <a href="blog-search.php?cat=<?= $row['category'] ?>"><?= $row['category'] ?></a></p>
                    <p class="font2">POSTED By: <a href="blog-search.php?author=<?= $row['author'] ?>"><?= $row['author'] ?></a></p>
                </div>
            </div>
            <div class="main-blog-section">
                <h2 class="font2"><?= $row['title'] ?></h2>
                <p class="font3"><?= $row['content'] ?></p>
                <video src="<?= $row['video'] ?>"></video>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="blog-sidebar">
        <div class="box">

            <div class="box-over">
                <h4 class="font1">Category</h4>
                <a href="blog-search.php?cat=<?= $cat['category'] ?>" class="font1"><?= $cat['category'] ?></a>
            </div>

        </div>
    </div>
</div>
<?php
include 'includes/footer.php';

?>