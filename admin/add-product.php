<?php
require_once '../config.php';
include '../includes/helper.php';
include 'index.php';


if (isset($_POST['submit'])) {

    $include = array(
        "inc1" => sanitize($_POST['inc1']),
        "inc2" => sanitize($_POST['inc2']),
        "inc3" => sanitize($_POST['inc3']),
        "inc4" => sanitize($_POST['inc4']),
        "inc5" => sanitize($_POST['inc5']),
        "inc6" => sanitize($_POST['inc6']),
        "inc7" => sanitize($_POST['inc7']),
        "inc8" => sanitize($_POST['inc8']),
        "inc9" => sanitize($_POST['inc9'])
    );

    $benefits = array(
        "benefit" => sanitize($_POST['benefit']),
        "benefit2" => sanitize($_POST['benefit2']),
        "benefit3" => sanitize($_POST['benefit3']),
    );
    $benefits2 = array(
        "benefit4" => sanitize($_POST['benefit4']),
        "benefit5" => sanitize($_POST['benefit5']),
        "benefit6" => sanitize($_POST['benefit6']),
    );


    $title = sanitize($_POST['prod_name']);
    $desc = sanitize($_POST['desc']);
    $excerpt = sanitize($_POST['excerpt']);
    $group = sanitize($_POST['group']);
    $price = sanitize($_POST['price']);
    $link = sanitize($_POST['amaz_link']);
    $searialized_include = serialize($include);
    $category = sanitize($_POST['category']);
    $searialized_benefit = serialize($benefits);
    $searialized_benefit2 = serialize($benefits2);
    $image = sanitize($_POST['image']);
    $image2 = sanitize($_POST['image2']);
    $image3 = sanitize($_POST['image3']);
    $image4 = sanitize($_POST['image4']);
    $image5 = sanitize($_POST['image5']);
    $image6 = sanitize($_POST['image6']);


    echo $include;


    // Uploading Image into database and folder

    $img_name = $_FILES['image']['name'];
    $img_name2 = $_FILES['image2']['name'];
    $img_name3 = $_FILES['image3']['name'];
    $img_name4 = $_FILES['image4']['name'];
    $img_name5 = $_FILES['image5']['name'];
    $img_name6 = $_FILES['image6']['name'];
    $target_dir = "../media";
    $target_file = $target_dir . basename($img_name);
    $target_file = $target_dir . basename($img_name2);
    $target_file = $target_dir . basename($img_name3);
    $target_file = $target_dir . basename($img_name4);
    $target_file = $target_dir . basename($img_name5);
    $target_file = $target_dir . basename($img_name6);

    // Validating Extensions for image 
    $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png");

    // Upload File 
    move_uploaded_file($_FILES['image']['temp_name'], $target_dir . $img_name);
    move_uploaded_file($_FILES['image2']['temp_name'], $target_dir . $img_name2);
    move_uploaded_file($_FILES['image3']['temp_name'], $target_dir . $img_name3);
    move_uploaded_file($_FILES['image4']['temp_name'], $target_dir . $img_name4);
    move_uploaded_file($_FILES['image5']['temp_name'], $target_dir . $img_name5);
    move_uploaded_file($_FILES['image6']['temp_name'], $target_dir . $img_name6);


    // Uploading form data into database
    $query = "INSERT INTO products (prod_name, prod_desc, prod_excerpt, prod_price, prod_include, prod_img1, prod_img2, prod_img3, prod_img4, prod_img5, prod_img6, prod_benefit, prod_benefit2, prod_link, category) 
                VALUES ('$title',' $desc', '$excerpt',' $price', '$searialized_include', '$image', '$image2', '$image3', '$image4', '$image5', '$image6','$searialized_benefit', '$searialized_benefit2', '$link', '$category')";



    if ($connection->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
}


?>

<div>
    <form action="add-product.php" class="container" method='POST'>
        <div class="form-group">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <input class="form-control" type="text" name="prod_name" id="prod_name" placeholder="Name of the product">
        </div>
        <div class="form-group">
            <label for="desc" class="col-sm-2 col-form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="6"></textarea>
        </div>
        <div class="form-group">
            <label for="excerpt" class="col-sm-2 col-form-label">Small Product Description</label>
            <textarea class="form-control" name="excerpt" id="excerpt" cols="30" rows="2" placeholder="Write 1-2 line description for main page"></textarea>
        </div>
        <div class="form-group">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <input class="form-control" type="text" name="price" id="price" placeholder="3000">
        </div>
        <div class="form-group">
            <select name="group" id="group">
                <option value="">Select Children Age Group</option>
                <option value="3-5">3-5</option>
                <option value="5-6">5-6</option>
                <option value="6+">6+</option>
            </select>
        </div>
        <div class="form-group">
            <select name="category" id="category">
                <option value="">Select a Category</option>
                <option value="3-5">Online Course</option>
                <option value="5-6">Montessori at Home</option>
                <option value="6+">Phonics</option>
                <option value="6+">Books</option>
                <option value="6+">Bundles and Packages</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="includes" class="col-sm-2 col-form-label">Includes</label>
            <input type="text" name="inc1" id="inc1">
            <input type="text" name="inc2" id="inc2">
            <input type="text" name="inc3" id="inc3">
            <input type="text" name="inc4" id="inc4">
            <input type="text" name="inc5" id="inc5">
            <input type="text" name="inc6" id="inc6">
            <input type="text" name="inc7" id="inc7">
            <input type="text" name="inc8" id="inc8">
            <input type="text" name="inc9" id="inc9">
        </div>

        <div class="form-group">
            <label for="link" class="col-sm-2 col-form-label">Amazon Link</label>
            <input class="form-control" type="text" name="amaz_link" id="amaz_link" placeholder="Put your Amazon lik here">
        </div>
        <!-- Images to upload into site -->
        <div class="form-group">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <input class="form-control" type="file" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-2 col-form-label">Image 2</label>
            <input class="form-control" type="file" name="image2" id="image2">
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-2 col-form-label">Image 3</label>
            <input class="form-control" type="file" name="image3" id="image3">
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-2 col-form-label">Image 4</label>
            <input class="form-control" type="file" name="image4" id="image4">
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-2 col-form-label">Image 5</label>
            <input class="form-control" type="file" name="image5" id="image5">
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-2 col-form-label">Image 6</label>
            <input class="form-control" type="file" name="image6" id="image6">
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 col-form-label">Benefit</label>
            <input class="form-control" type="text" name="benifit" id="benifit" placeholder="Benefit Point 1">
            <input class="form-control" type="text" name="benifit2" id="benifit2" placeholder="Benefit Point 2">
            <input class="form-control" type="text" name="benifit3" id="benifit3" placeholder="Benefit Point 3">
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 col-form-label">Benefit</label>
            <input class="form-control" type="text" name="benefit4" id="benefit4" placeholder="Benefit Point 4">
            <input class="form-control" type="text" name="benefit5" id="benefit5" placeholder="Benefit Point 5">
            <input class="form-control" type="text" name="benefit6" id="benefit6" placeholder="Benefit Point 6">
        </div>
        <div class="form-group">
            <button name="submit" name="submit" class="form-control btn btn-primary"id="submit">Submit</button>
        </div>
    </form>
</div>