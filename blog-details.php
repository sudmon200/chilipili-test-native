<?php

include 'config.php';
include 'includes/header.php';

$category = $_GET['cat'];

$sql = "SELECT * FROM blog_post WHERE category='$category'";

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
            <input type="text" name="search" id="search" placeholder="Search" >
            <button>Submit</button>
        </div>

    </form>
</div>
<div class="blog-main m-side">
    <div class="blog-content">
        <h3 class="font1">Search Results</h3>
        <div class="posts">
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