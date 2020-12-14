// this approach adds active class using url and it works
let href = window.location.href;
let dynamicId = href.substring(href.lastIndexOf("/") + 1, href.length)
document.getElementById(dynamicId).classList.add("active")


var owl = $('.owl-carousel');
$('.owl-carousel').owlCarousel({
    rtl: true,
    loop: true,
    margin: 10,
    nav: true,
    responsiveClass: true,
    items: 3,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

owl.on('mousewheel', '.owl-stage', function(e) {
    if (e.deltaY > 0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
});


// // Initialize and add the map
// function initMap() {
//     // The location of Uluru
//     const uluru = { lat: -25.344, lng: 131.036 };
//     // The map, centered at Uluru
//     const map = new google.maps.Map(document.getElementById("map"), {
//         zoom: 4,
//         center: uluru,
//     });
//     // The marker, positioned at Uluru
//     const marker = new google.maps.Marker({
//         position: uluru,
//         map: map,
//     });
// }


// function myDropdown() {
//     document.getElementById("myDropdown").classList.toggle("show");
// }

// // Close the dropdown menu if the user clicks outside of it
// window.onclick = function(event) {
//     if (!event.target.matches('.dropbtn')) {
//         var dropdowns = document.getElementsByClassName("dropdown-content");
//         var i;
//         for (i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//             if (openDropdown.classList.contains('show')) {
//                 openDropdown.classList.remove('show');
//             }
//         }
//     }
// }

function preschool(preschoolId) {
    console.log(preschoolId)
    var dropdownContent = document.getElementById(preschoolId)
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        dropdownContent.style.display = "block";
    }

}

function deselect(preschoolId) {
    var dropdownContent = document.getElementById(preschoolId)
    dropdownContent.style.display = "none";
}

// var zoomImageGallery = document.getElementById("image-gallery");
// console.log(zoomImageGallery)
// zoomImageGallery.addEventListener('click',(e)=>{
//     console.log(e.target)
// })

function playVideo() {
    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);

}

$(document).ready(function() {

    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);



    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function(e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })



    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function(e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })






    // document ready  
});
var urls = [
    'https://source.unsplash.com/810x600',
    'https://source.unsplash.com/800x610',
    'https://source.unsplash.com/810x610',
    'https://source.unsplash.com/800x600'
];
var placeholder = document.querySelector('.split-slider__placeholder')
var slides = document.querySelectorAll('.slide');
var slidesLength = slides.length;
var currentElem = slides[0];
var currentIndex = 0;

function loadImage(url) {
    return new Promise(function(resolve, reject) {
        var img = new Image();
        img.onload = function() {
            img.onload = img.onerror = null;
            resolve(img);
        };
        img.onerror = function(e) {
            img.onload = img.onerror = null;
            reject(e);
        };
        img.src = url;
    });
}

function loadImages(urls) {
    return Promise.all(urls.map(url => loadImage(url)))
}

function onError(error) {
    // placeholder.classList.add('split-slider__placeholder_error');
    placeholder.innerHTML = `
		<pre><code>error</pre></code>`;
    return error;
}

function setImagesUrls(images) {
    slides.forEach((slide, index) => {
        slide.querySelector('.slide__image')
            .style.backgroundImage = `url(${images[index].src})`;
        slide.classList.remove('slide_wait');
    });
}

function setActiveSlide(index) {
    slides[index].classList.add('slide_active');
    currentElem.classList.remove('slide_active');
    currentElem = slides[index];
}

function changeSlide() {
    currentIndex = (currentIndex + 1 + slidesLength) % slidesLength;
    setActiveSlide(currentIndex);
}

function start() {
    setInterval(changeSlide, 4000);
}

loadImages(urls)
    .then(setImagesUrls)
    .then(start)
    .catch(onError)