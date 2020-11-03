<?php
include 'includes/header.php';

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
        <h3 class="font1">Latest Posts</h3>
        <div class="posts">
            <div class="post">
                <p class="title font2">About Chili Pili Phonics</p>
                <p class="excerpt font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet repudiandae obcaecati ratione quaerat id blanditiis minus voluptates cumque nulla assumenda quia ipsam repellendus quam molestias, culpa amet fugit odit fugiat minima? Consequuntur sunt iusto corporis veritatis totam nesciunt inventore sed nobis. Molestiae pariatur sunt mollitia deserunt est repellendus adipisci. Rerum praesentium recusandae aut sequi explicabo autem? Praesentium, obcaecati, dolorum nam laboriosam eligendi similique sapiente optio, consectetur suscipit illo itaque aperiam numquam repellat.</p>
            </div>
        </div>
    </div>
    <div class="blog-sidebar">
        <div class="box">
            <div class="box-over">
                <h4 class="font1">Category</h4>
                <p class="font2">Category 1</p>
            </div>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';

?>