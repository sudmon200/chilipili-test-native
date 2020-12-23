<?php
include 'includes/header.php'
?>


<div class="pre-main-header m-def">

    <h2 class="font1 text-center">At Play</h2>

</div>

<section class="photos">
    <div>
        <hr>
        <h3>Photos</h3>
    </div>
    <div class="photo-row m-side">
        <img src="../media/preschool/gallery/AtPlay/20191122_103857-min.jpg" alt="">
        <img src="../media/preschool/gallery/AtPlay/20191122_103900-min.jpg" alt="">
        <img src="../media/preschool/gallery/AtPlay/20191122_104532-min.jpg" alt="">
        <img src="../media/preschool/gallery/AtPlay/IMG_20180628_111306-min.jpg" alt="">
    </div>
    <div class="photo-row m-top m-side">
        <img src="../media/preschool/gallery/AtPlay/IMG_20190606_104609095-min.jpg" alt="">
        <img src="../media/preschool/gallery/AtPlay/IMG-20190617-WA0016-min.jpg" alt="">
        <img src="../media/preschool/gallery/AtPlay/IMG-20190617-WA0026-min.jpg" alt="">
        <img src="../media/preschool/gallery/AtPlay/IMG-20190617-WA0034-min.jpg" alt="">
    </div>
</section>

<section class="videos m-def m-side">
    <div>
        <hr>
        <h3>Videos</h3>
    </div>
    <div class="vid-row">
        <div class="vid-text">
            <p>Chidren enjoy the side parallel bars. They enjoy a game of trying to catch each other. This intrinsically develops not only hand strength but also helps to keep them very alert.</p>
        </div>
        <div class="vid-img">
            <img src="../media/preschool/gallery/AtPlay/AtPlayThumbnail.png" alt="" data-toggle="modal" class="video-btn" data-src="../media/preschool/gallery/AtPlay/Video/AtPlay.mp4" data-target="#myModal" onclick="playVideo()">
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