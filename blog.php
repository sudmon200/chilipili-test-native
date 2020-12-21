<?php

include 'config.php';
include 'includes/header.php';

$sql = "SELECT * FROM blog_post ORDER BY postDate DESC";

$result = $connection->query($sql);


?>

<div class="container" style="height:50px;">
</div>
<div class="container header-top m-def">
    <h2 class="font1">
        Blog
    </h2>
</div>

<div class="font1 m-def text-center">
    <div class="search">
        <form action="blog-search.php" method="get">
            <input type="text" name="blog_search" id="blog_search" placeholder="Search">
            <button>Search</button>
        </form>
    </div>

</div>
<div class="flakes" style="background-image:url('media/final-asset/leaf_background.png')">
    <div class="blog-main m-side">
        <div class="blog-content">
            <h3 class="font1">Latest Posts</h3>
            <div class="posts">
                <div class="first-post">
                    <div class="first-box">
                        <div class="first-box-over">
                            <div class="first-d-image">
                                <div class="first-date-border">
                                    <div class="first-date-box">
                                        <p class="date">11 Aug</p>
                                    </div>
                                </div>
                                <img src="media/img.jpg" alt="blog image">
                                <p>Author: Suhas Kulhali</p>
                            </div>
                            <p class="first-title font2">About Chili Pili Phonics</p>
                            <p class="first-excerpt font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet repudiandae obcaecati ratione quaerat id blanditiis minus voluptates cumque nulla assumenda quia ipsam repellendus quam molestias, culpa amet fugit odit fugiat minima? Consequuntur sunt iusto corporis veritatis totam nesciunt inventore sed nobis. Molestiae pariatur sunt mollitia deserunt est repellendus adipisci. Rerum praesentium recusandae aut sequi explicabo autem? Praesentium, obcaecati, dolorum nam laboriosam eligendi similique sapiente optio, consectetur suscipit illo itaque aperiam numquam repellat.</p>

                        </div>
                    </div>
                </div>
                <?php while ($row = mysqli_fetch_array($result)) : ?>
                    <div class="second-post m-def">
                        <div class="second-box">
                            <div class="second-box-over">
                                <div class="second-date-border">
                                    <div class="second-date-box">
                                        <p class="second-date"><?= $row['postDate']; ?></p>
                                    </div>
                                </div>
                                <div class="second-d-image">
                                    <?php $img = $row['img']; ?>
                                    <?php $img_src = "media/" . $img; ?>
                                    <img src="<?php echo $img_src; ?>" alt="blog image">
                                    <p class="font2">POSTED IN: <a href="blog-search.php?cat=<?= $row['category'] ?>"><?= $row['category'] ?></a></p>
                                </div>
                                <p class="title font2"><a href="blog-details.php?id=<?= $row['postID'] ?>"><?= $row['title'] ?></a></p>
                                <p class="excerpt font3"><?= $row['excerpt'] ?></p>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="blog-sidebar">
            <div class="box">

                <div class="box-over">
                    <h4 class="font1">Category</h4>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>
                        <a href="blog-search.php?cat=<?= $row['category'] ?>" class="font1"><?= $row['category'] ?></a>
                    <?php endwhile; ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?php

include 'includes/footer.php';

?>