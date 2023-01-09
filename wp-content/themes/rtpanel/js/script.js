
// Sticky Header
jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $('.header').addClass('is-sticky');
        } else {
            $('.header').removeClass('is-sticky');
        }
    });
});


// Header
$('.toggle-menu').click(function () {
    $('.sidebar').addClass('active');
    $('.close-sidebar').addClass('active');
})
$('.close-sidebar').click(function () {
    $('.sidebar').removeClass('active');
    $(this).removeClass('active');
})
$(document).keyup(function (e) {
    $('.sidebar').removeClass('active');
    $('.close-sidebar').removeClass('active');
}); 

// Mobile Menu
$('.sidebar__menu .menu-item-has-children').on('click', function () {
    $(this).siblings().removeClass('sub-menu-open'); 
    $(this).toggleClass('sub-menu-open');        
});              

// wow js
new WOW().init();  

// Banner Slider
if ($(".hero-banner-wrapper").length) {
    $(document).ready(function () {
        var heroslider = new Swiper(".hero-banner__slider--loop", {
            draggable: true,
            loop: true,
            autoplay: true,
            speed: 500,
            effect: 'fade',
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true, 
            },
        });
    });
} 

// Thumb Slider
if ($(".thumb-slider-wrapper").length) {
    $(document).ready(function () {
        var thumbslider = new Swiper(".thumb-slider__main-loop", {
            draggable: true,
            loop: false,
            slidesPerView: 5,
            spaceBetween: 10,
            speed: 500,
            grabCursor: true,
            navigation: {
                nextEl: '.gold-swiper-button-next',
                prevEl: '.gold-swiper-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1, 
                }, 
                425: {
                    slidesPerView: 2, 
                }, 
                640: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 3,
                },
                1199: {
                    slidesPerView: 4,
                },
                1366: {
                    slidesPerView: 5,
                },
            },
        });
    });
}

// Partner Slider
if ($(".partner-slider-wrapper").length) {
    $(document).ready(function () {
        var partnerslider = new Swiper(".partner-slider__main-loop", {
            draggable: true,
            loop: false,
            slidesPerView: 5,
            spaceBetween: 10,
            speed: 500,
            grabCursor: true,
            navigation: {
                nextEl: '.partner-gold-swiper-button-next',
                prevEl: '.partner-gold-swiper-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                425: {
                    slidesPerView: 2,
                },
                640: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 3,
                },
                1199: {
                    slidesPerView: 4,
                },
                1366: {
                    slidesPerView: 5,
                },
            },
        });
    });
}

// News Slider
if ($(".news-box__slider").length) {
    $(document).ready(function () {
        var newsboxslider = new Swiper(".news-box__slider--loop", {
            draggable: true,
            loop: false,
            slidesPerView: 1,
            spaceBetween: 10, 
            speed: 500,
            grabCursor: true,
            navigation: {
                nextEl: '.news-gold-swiper-button-next',
                prevEl: '.news-gold-swiper-button-prev',
            },
        });
    });
}

// Date and Time
if ($(".news-box__date-time").length) {
    const displayTime = document.querySelector(".display-time");
    // Time
    function showTime() {
        let time = new Date();
        displayTime.innerText = time.toLocaleTimeString("en-US", { hour12: true });
        setTimeout(showTime, 1000);  
    }

    showTime();

    // Date 
    function updateDate() {
        let today = new Date();

        // return number
        let dayName = today.getDay(),
            dayNum = today.getDate(),
            month = today.getMonth(),
            year = today.getFullYear();

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];
        const dayWeek = [
            "Sunday",
            "Monday",
            "Tuesday", 
            "Wednesday", 
            "Thursday",
            "Friday",
            "Saturday",
        ];
        // value -> ID of the html element
        const IDCollection = ["day", "daynum", "month", "year"];
        // return value array with number as a index
        const val = [dayWeek[dayName], dayNum, months[month], year];
        for (let i = 0; i < IDCollection.length; i++) {
            document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
        }
    }

    updateDate();
}     