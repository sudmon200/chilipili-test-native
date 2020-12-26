// this approach adds active class using url and it works
let href = window.location.href;
let dynamicId = href.substring(href.lastIndexOf("/") + 1, href.length)
    document.getElementById(dynamicId)?.classList.add("active")





// owl.on('mousewheel', '.owl-stage', function(e) {
//     if (e.deltaY > 0) {
//         owl.trigger('next.owl');
//     } else {
//         owl.trigger('prev.owl');
//     }
//     e.preventDefault();
// });


// Home Page Slider for main website 
var line = $('.item-slider');

var tl = new TimelineLite({
			onComplete: function(){
				tl.restart();
			}
		});

 
TweenLite.defaultEase = Circ.easeInOut;

var time = 0.9;
var y = 100;

tl
	.add ( TweenMax.staggerFromTo (
		line, time,
			{
				opacity: 0,
				y:y,
			},
			{	
				opacity: 1,
				y: 0,
			},
		2 ))
	.add ( TweenMax.staggerTo (
		line, time,
			{
				delay: time,
				opacity: 0,
				y: -y,
			},
        2 ), 1.3)
        

// Home Page Slider for main website Ends Here



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


let contents = document.querySelectorAll('.activity-sub-section')
let heading = document.querySelectorAll('.activity-sub-heading');

for (var x in heading) {
        heading[x].onclick = function() {
        if (this.nextElementSibling.style.display === "block") {
            this.nextElementSibling.style.display = "none";
        } else {
            this.nextElementSibling.style.display = "block";
        }
    };
}
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


// Preschool Slider Starts Here 
const preSlider = document.querySelector('.pre-img-slide');
const preTextSlider = document.querySelector('.pre-slider-text');
// const preSliderImg = document.querySelector('.pre-img-slide img');

const preSliderLArrow = document.querySelector('#left');
const preSliderRArrow = document.querySelector('#right');

let counter = 0;

const size = preSlider.clientWidth;
const size2 = preTextSlider.clientWidth;




preSliderRArrow.addEventListener('click', function() {
    console.log(-size2 * counter);
    if (counter > 3) {
        console.log("working LEft!!");
        return;
    }
    console.log("working Right!!");
    counter++;
    preSlider.style.transform = 'translateX(' + (-size * counter) + 'px)';
    preTextSlider.style.transform = 'translateX(' + (-size2 * counter) + 'px)';
});

preSliderLArrow.addEventListener('click', function() {
    console.log(-size2 * counter);
    counter--;
    if (counter < 0) {
        ''
        return;
    }
    preSlider.style.transform = 'translateX(' + (-size * counter) + 'px)';
    preTextSlider.style.transform = 'translateX(' + (-size2 * counter) + 'px)';
});