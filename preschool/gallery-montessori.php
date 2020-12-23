<?php
include 'includes/header.php'
?>


<div class="pre-main-header m-def">

    <h2 class="font1 text-center">At Montessori</h2>

</div>

<section class="photos">
    <div>
        <hr>
        <h3>Photos</h3>
    </div>
    <div class="photo-row m-side">
        <img src="../media/preschool/gallery/Montessori/DSC_0102-min.JPG" alt="">
        <img src="../media/preschool/gallery/Montessori/DSC_0103-min.JPG" alt="">
        <img src="../media/preschool/gallery/Montessori/IMG_20180628_115458-min.jpg" alt="">
        <img src="../media/preschool/gallery/Montessori/IMG_20180628_115513-min.jpg" alt="">
    </div>
    <div class="photo-row m-top m-side">
        <img src="../media/preschool/gallery/Montessori/IMG_20180628_120027-min.jpg" alt="">
        <img src="../media/preschool/gallery/Montessori/IMG_20180703_115727-min.jpg" alt="">
        <img src="../media/preschool/gallery/Montessori/IMG_20180703_115754-min.jpg" alt="">
        <img src="../media/preschool/gallery/Montessori/IMG_20180704_121814-min.jpg" alt="">
    </div>
</section>

<section class="videos m-def m-side">
    <div>
        <hr>
        <h3>Videos</h3>
    </div>
    <div class="vid-row">
        <div class="vid-text">
            <p>Different aspects of montessori learning activies like Practical, Sensorial and Mathematics is showcased here.</p>
        </div>
        <div class="vid-img">
            <img src="../media/preschool/gallery/Montessori/MontessoriThumbnail.png" alt="" data-toggle="modal" class="video-btn" data-src="../media/preschool/gallery/Montessori/video/Montessori.mp4" data-target="#myModal" onclick="playVideo()">
        </div>
    </div>
</section>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">


            <div class="modal-body">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>


            </div>

        </div>
    </div>
</div>


<?php
include 'includes/footer.php'
?>