<?php
include 'includes/header.php';

// $prod_id = $_GET['prod_id'];

// $sql = "SELECT * FROM products WHERE prod_id='$prod_id'";

// $result = $connection->query($sql);

?>

<div class="search m-def">
    <input type="text" name="search" id="search" placeholder="Search">
    <button>Search</button>
</div>

<section class="product-bg">
    <div class="pagination">
        <p>Store ->> Age 3-4 ->> Phonics</p>
    </div>
    <div class="prod-main m-def m-side">
        <div class="prod-imgs">
            <img src="media/Suhas.jpg" alt="">
            <img src="media/Suhas.jpg" alt="">
            <img src="media/Suhas.jpg" alt="">
            <img src="media/Suhas.jpg" alt="">
            <img src="media/Suhas.jpg" alt="">
            <img src="media/Suhas.jpg" alt="">
            <img src="media/Suhas.jpg" alt="">

        </div>
        <div class="prod-content">
            <h5 class="font2">Product Description</h5>
            <p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed explicabo, id ea tenetur ut voluptas, quis sint neque qui nobis possimus voluptate quos! Vero incidunt necessitatibus hic officiis delectus autem non, sapiente debitis aliquid.</p>

            <span class="price"></span>

            <p class="font3">Ideal for age Groups 3-5.</p>

            <div class="include">
                <p class="font3">Contents Include:</p>
                <div class="row">
                    <div class="col-md col-sm col-lg">
                        <div class="d-flex flex-row">
                            <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon"><p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="d-flex flex-row">
                            <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon"><p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="d-flex flex-row">
                            <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon"><p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="d-flex flex-row">
                            <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon"><p>Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="col-md col-sm col-lg">
                        <div class="d-flex flex-row">
                            <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon"><p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="d-flex flex-row">
                            <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon"><p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="d-flex flex-row">
                            <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon"><p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="d-flex flex-row">
                            <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon"><p>Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button that will open model of prices of products on amazon  -->
            <button>Buy Now</button>

        </div>
    </div>

    <div class="prod-description m-def m-side">
        <h5 class="font2">Detailed Product Description</h5>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ratione dolore odit molestias sequi error corrupti similique et enim voluptatibus omnis sint molestiae dignissimos corporis quod modi velit, saepe nisi quo quae dicta. Iure pariatur reprehenderit sit aliquid. Praesentium, ipsam? Facilis dignissimos ullam nostrum cumque quaerat?</p>

    </div>

</section>

<div class="benefits m-side">
    <h5 class="font2">Benefits:</h5>

    <div class="d-flex flex-row">
        <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
        <p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt laudantium consequuntur cupiditate!</p>
    </div>
    <div class="d-flex flex-row">
        <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
        <p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt laudantium consequuntur cupiditate!</p>
    </div>
    <div class="d-flex flex-row">
        <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
        <p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt laudantium consequuntur cupiditate!</p>
    </div>
    <div class="d-flex flex-row">
        <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
        <p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt laudantium consequuntur cupiditate!</p>
    </div>
    <div class="d-flex flex-row">
        <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
        <p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt laudantium consequuntur cupiditate!</p>
    </div>
    <div class="d-flex flex-row">
        <img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
        <p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt laudantium consequuntur cupiditate!</p>
    </div>

</div>

<div class="similar-prod m-def m-side">

</div>

<div class="reccomended m-side">

</div>

<?php
include 'includes/footer.php';
?>