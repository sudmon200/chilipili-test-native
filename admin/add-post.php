<?php
require_once '../config.php';

function sanitize ($dirty){
    return htmlentities($dirty,ENT_QUOTES,"UTF-8");
}


if (isset($_POST['submit'])) {
    
    $title = sanitize($_POST['post_title']);
    $author = sanitize($_POST['author']);
    $date = sanitize($_POST['date']);
    $mins = sanitize($_POST['mins_of_read']);
    $content = sanitize($_POST['post_content']);
    $img = sanitize($_POST['image']);
    $excerpt = sanitize($_POST['post_excerpt']);
    $category = sanitize($_POST['category']);

    // Uploading Image into database and folder

    $img_name = $_FILES['image']['name'];
    $target_dir = "../media";
    $target_file = $target_dir . basename($img_name);

    // Validating Extensions for image 
    $imgFileType = strtolower (pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png");

    // Upload File 
    move_uploaded_file($_FILES['img']['temp_name'], $target_dir.$img_name);


    // Uploading form data into database
    $query = "INSERT INTO blog_post (title, author, PostDate, mins_read, content, img, excerpt, category) 
                VALUES ('$title',' $author', '$date',' $mins', '$content', '$img_name', '$excerpt', '$category')";


    
    if ($connection->query($query) === TRUE) {
        echo "New record created successfully";
      } 
    else {
        echo "Error: " . $query . "<br>" . $connection->error;
      }
    
}


?>

<div>
    <form action="add-post.php" method='POST'>
        <div>
            <input type="text" name="post_title" id="post_title" placeholder="Post Title">
        </div>
        <div>
            <input type="date" name="date" id="date">
        </div>
        <div>
            <input type="text" name="author" id="author" placeholder="Author Name" >
        </div>
        <div>
            <input type="text" name="mins_of_read" id="mins_of_read" placeholder="Time to Read">
        </div>
        <div>
            <textarea name="post_excerpt" id="post_excerpt" cols="30" rows="10" placeholder="Excerpt"></textarea>
        </div>
        <div>
            <select name="category" id="category">
                <option value="">Select a Category</option>
                <option value="Education">Education</option>
                <option value="Phonics">Phonics</option>
                <option value="Modules">Modules</option>
                <option value="School">School</option>
                <option value="Vision">Vision</option>
            </select>
        </div>
        <div>
            <textarea name="post_content" id="post_content" cols="60" rows="50" placeholder="content"></textarea>
        </div>
        <div>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <button name="submit" name ="submit" id="submit">Submit</button>
        </div>
    </form>
</div>