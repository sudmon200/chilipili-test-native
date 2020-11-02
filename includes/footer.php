<!-- Bootstrap JS -->
<!-- JavaScript Bundle with Popper.js -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

<!-- Custom JS -->

<script>
    function initMap() {
        const chilipili = {lat: 34.397, lng:150.644};
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 34.397,
                lng: 150.644
            },
            scrollwheel: false,
            zoom: 2
        });

        var marker = new google.maps.Marker({
            position: chilipili,
            map:map
        });
    } // close function here
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv6Y1yutarDFYWNI_GidFdSf9TY0cwb_I&callback=initMap">
</script>
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>