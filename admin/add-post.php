<?php
require_once '../config.php';
?>

<div>
    <form action="add-post.html" method='POST'>
        <div>
            <input type="text" name="post_title" id="post_title" placeholder="Post Title">
        </div>
        <div>
            <input type="text" name="author" id="author" placeholder="Author Name" >
        </div>
        <div>
            <input type="text" name="mins_of_read" id="mins_of_read" placeholder="Time to Read">
        </div>
        <div>
            <textarea name="post_content" id="post_content" cols="30" rows="10" placeholder="Excerpt"></textarea>
        </div>
        <div>
            <textarea name="post_content" id="post_content" cols="60" rows="50" placeholder="content"></textarea>
        </div>
        <div>
            <button name="submit" id="submit">Submit</button>
        </div>
    </form>
</div>