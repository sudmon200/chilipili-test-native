<?php

include 'config.php';
include 'includes/header.php';

$category = $_GET['cat'];

$sql = "SELECT * FROM blog_post WHERE category='$category'";

$result = $connection->query($sql);

$search = $_GET['blog_search'];

// echo $_GET['cat'];


$sql2 = "SELECT * FROM blog_post WHERE (`title` LIKE '%".$search."%') OR (`content` LIKE '%".$search."%')";

$result2 = $connection->query($sql2);

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
                <input type="text" name="blog_search" id="blog_search" placeholder="Search" >
                <button>Submit</button>
            </form>
        </div>

    </form>
</div>
<div class="blog-main m-side">
    <div class="blog-content">
        <h3 class="font1">Search Results</h3>
        <div class="posts">
            <!-- <div class="first-post">
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
            </div> -->
            <?php while ($row = mysqli_fetch_array($result)): ?>
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
                            <?php $img_src = "media/".$img ; ?>
                            <img src="<?php echo $img_src; ?>" alt="blog image">
                            <p class="font2">POSTED IN: <a href="blog-search.php?cat=<?= $row['category'] ?>"><?= $row['category'] ?></a></p>
                        </div>
                        <p class="title font2"><a href="blog-details.php?id=<?= $row['postID'] ?>"><?= $row['title'] ?></a></p>
                        <p class="excerpt font3"><?= $row['excerpt'] ?></p>
                
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

            <?php while ($row_search = mysqli_fetch_array($result2)): ?>
            <div class="second-post m-def">
                <div class="second-box">
                    <div class="second-box-over">
                        <div class="second-date-border">
                            <div class="second-date-box">
                                <p class="second-date"><?= $row_search['postDate']; ?></p>
                            </div>
                        </div>
                        <div class="second-d-image">
                            <?php $img = $row_search['img']; ?>
                            <?php $img_src = "media/".$img ; ?>
                            <img src="<?php echo $img_src; ?>" alt="blog image">
                            <p class="font2">POSTED IN: <a href="blog-search.php?cat=<?= $row_search['category'] ?>"><?= $row_search['category'] ?></a></p>
                        </div>
                        <p class="title font2"><a href="blog-details.php?id=<?= $row_search['postID'] ?>"><?//= $row_search['title'] ?></a></p>
                        <p class="excerpt font3"><?= $row_search['excerpt'] ?></p>
                
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
                    <a href="blog-search.php?cat=<?= $cat['category'] ?>" class="font1"><?= $cat['category'] ?></a>
                </div>
            
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';

?>