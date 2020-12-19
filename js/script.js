// this approach adds active class using url and it works
let href = window.location.href;
let dynamicId = href.substring(href.lastIndexOf("/") + 1, href.length)
    // document.getElementById(dynamicId) ? .classList.add("active")





// owl.on('mousewheel', '.owl-stage', function(e) {
//     if (e.deltaY > 0) {
//         owl.trigger('next.owl');
//     } else {
//         owl.trigger('prev.owl');
//     }
//     e.preventDefault();
// });

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        // var owl = $('.owl-carousel');
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




function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}




// Activities show content functions 

// Function to show description section of activities 
function showContent() {
    content1 = document.getElementById('content1');
    content2 = document.getElementById('content2');
    content3 = document.getElementById('content3');

    console.log(content2.style.display === "none" && content1.style.display === "block");
    console.log(content2.style.display === "none");
    console.log(content1.style.display === "block");
    console.log(window.getComputedStyle(content2).display)

    if (content1.style.display === "block") {
        content1.style.display = "none"
    } else if (content2.style.display === "none" || content2.style.display === "none") {
        content2.style.display = "none";
        content3.style.display = "none"
    } else if (content1.style.display === "none") {
        content1.style.display = "block";
    }

}

// Function to show Age section of activities 

// function showContentAge() {
//     content1 = document.getElementById('content1');
//     content2 = document.getElementById('content2');
//     content3 = document.getElementById('content3');
//     if (window.getComputedStyle(content2).display === "none" && content1.style.display === "block") {
//         content1.style.display = "none";
//         content2.style.display = "block";

//     } else if (window.getComputedStyle(content2).display === "none" && content1.style.display === "none") {
//         content2.style.display = "block";

//     } else if (window.getComputedStyle(content2).display === "none" && window.getComputedStyle(content3).display === "block") {
//         content3.style.display = "none";
//         content2.style.display = "block";

//     } else if (content2.style.display === "block") {
//         content2.style.display = "none";
//     }
// }

// Function to show Time section of activities 

// function showContentTime() {
//     content1 = document.getElementById('content1');
//     content2 = document.getElementById('content2');
//     content3 = document.getElementById('content3');
//     if (window.getComputedStyle(content3).display === "none" && content1.style.display === "block") {
//         content1.style.display = "none";
//         content3.style.display = "block";

//     } else if (window.getComputedStyle(content2).display === "none" && content1.style.display === "none") {
//         content3.style.display = "block";

//     } else if (window.getComputedStyle(content2).display === "block" && window.getComputedStyle(content3).display === "none") {
//         content3.style.display = "none";
//         content2.style.display = "block";

//     } else if (content3.style.display === "block") {
//         content3.style.display = "none";
//     }
// }

// Activities show content functions Ends here





// Teacher Slider Controls 
var count = 1;

function slideImages(dir) {

    var listEl = document.querySelector('.jslider-grid.scalable-grid.scalable-grid--max-4');
    var totalChildren = document.querySelectorAll('.item').length;
    btnLeftEl = document.getElementById('left-btn');
    btnRightEl = document.getElementById('right-btn');
    dir === "left" ? ++count : --count;
    console.log(dir);
    console.log(count);
    listEl.style.left = count * 286 + "px";
    console.log(count);
    btnLeftEl.style.display = count < 0 ? "block" : "none";
    console.log(count);

    btnRightEl.style.display = count > 4 - totalChildren ? "block" : "none";
    // 4 = max. number displayed
    console.log(count);
}



function rightBtn() {

    slideImages("right");

}

function leftBtn() {

    slideImages("left");

}

// Teacher Slider Controls Ends Here


// Open PDF in New Tab Starts Here

function openPdf(e, path, redirect) {
    e = e || window.event; // for IE
    e.preventDefault();

    // launch a new window with your PDF
    window.open(path, 'somename');

    // redirect current page to new location
    window.location = redirect;
}

// Open PDF in New Tab Ends Here