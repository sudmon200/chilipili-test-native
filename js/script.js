

// this approach adds active class using url and it works
let href = window.location.href;
let dynamicId = href.substring(href.lastIndexOf("/")+1,href.length)
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

owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY > 0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

$(document).ready(function () {
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

function preschool(preschoolId){
    console.log(preschoolId)
    var dropdownContent = document.getElementById(preschoolId)
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        }
         else {
        dropdownContent.style.display = "block";
        }

}
function deselect(preschoolId){
    var dropdownContent = document.getElementById(preschoolId)
    dropdownContent.style.display = "none";
}

// var zoomImageGallery = document.getElementById("image-gallery");
// console.log(zoomImageGallery)
// zoomImageGallery.addEventListener('click',(e)=>{
//     console.log(e.target)
// })