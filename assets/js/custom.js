if( $(".servicesSwiper").length ){

    const swiper = new Swiper('.servicesSwiper', {
        slidesPerView: 4,
        slidesPerGroup: 1,
        spaceBetween: 20,
        loop: true,
        loopedSlides: 6,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
         breakpoints: {
        // Mobile: 0–575px → 1 card
        0: {
        slidesPerView: 1,
        spaceBetween: 16,
        },
        // Tablet: 576–767px → 1.2 cards (peek effect)
        576: {
        slidesPerView: 1.2,
        spaceBetween: 20,
        },
        // Large tablet: 768–991px → 2 cards
        768: {
        slidesPerView: 2,
        spaceBetween: 22,
        },
        // Small desktop: 992–1199px → 3 cards
        992: {
        slidesPerView: 3,
        spaceBetween: 25,
        },
        // Desktop: 1200px+ → 4 cards
        1200: {
        slidesPerView: 4,
        spaceBetween: 25,
        },
    },
        speed: 600,
    });
}

if( $("#teamSwiper").length ){
    const swiper = new Swiper('#teamSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            prevEl: '#teamPrev',
            nextEl: '#teamNext',
        },
        autoplay: {
            delay: 2500, // time in ms (2.5 sec)
            disableOnInteraction: false, // keep autoplay after user swipe
        },
        pagination: {
            el: '#teamPagination',
            clickable: true,
        },
        breakpoints: {
            480: {
                slidesPerView: 2,
                spaceBetween: 16
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 24
            },
            1280: {
                slidesPerView: 5,
                spaceBetween: 24
            },
        }
    });
}

if( $(".testimonialSwiper").length ){
    const tetimonial = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        pagination: {
            el: '#testimonialPagination',
            clickable: true,
        },
        autoplay: {
            delay: 2500, // time in ms (2.5 sec)
            disableOnInteraction: false, // keep autoplay after user swipe
        },
        navigation: {
            nextEl: '#nextBtn',
            prevEl: '#prevBtn',
        },
        breakpoints: {
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            },
        },
   });
}

document.addEventListener("DOMContentLoaded", function () {

    if( $(".register").length ){
        const sectionDropAnimation = document.querySelector(".register");

        const observerDropAnimation = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    sectionDropAnimation.classList.add("animate");

                    // OPTIONAL: run only once
                    observerDropAnimation.unobserve(sectionDropAnimation);
                }
            });
        }, {
            threshold: 0.3 // trigger when 30% visible
        });

        observerDropAnimation.observe(sectionDropAnimation);
    }
});

if( $('.benefit-item').length ){
    function toggleItem(el) {
        const items = document.querySelectorAll('.benefit-item');
        items.forEach(item => {
            if (item !== el) item.classList.remove('active');
        });
        el.classList.toggle('active');
    }
}

 const swiper = new Swiper('.blogSwiper', {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 20 },
      992: { slidesPerView: 3, spaceBetween: 24 },
    },
  });
  
    const taxSwiper = new Swiper('.taxSwiper', {
         slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 2500, // time in ms (2.5 sec)
            disableOnInteraction: false, // keep autoplay after user swipe
        },
        navigation: {
            nextEl: '#nextBtn',
            prevEl: '#prevBtn',
        },
         breakpoints: {
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 4
            },
            1200: {
                slidesPerView: 5
            },
        },
    });

if( $('.benefitsSwiper').length ){
    const swiper = new Swiper('.benefitsSwiper', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        centeredSlides: false,
        grabCursor: true,
        loop: false,
        autoplay: {
            delay: 2500, // time in ms (2.5 sec)
            disableOnInteraction: false, // keep autoplay after user swipe
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '#nextBtn',
            prevEl: '#prevBtn',
            disabledClass: 'swiper-button-disabled',
        },
        breakpoints: {
            576: {
                slidesPerView: 1.8,
                spaceBetween: 22
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 24
            },
            992: {
                slidesPerView: 3.3,
                spaceBetween: 26
            },
            1200: {
                slidesPerView: 4.1,
                spaceBetween: 28
            },
        },
    });
}

if( $(".benefit-item").length ){
    const items = document.querySelectorAll('.benefit-item');
    const preview = document.getElementById('previewImg');

    items.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const img = item.getAttribute('data-img');
            preview.src = img;
        });
    });
}

if( $(".top-navbar").length ){
    let lastScrollTop = 0;

    window.addEventListener("scroll", function () {
        let topNavbar = document.querySelector(".top-navbar");
        let nav = document.querySelector(".eg-nav");
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop && scrollTop > 50) {
            // Scroll DOWN
            topNavbar.classList.add("hide");
            nav.classList.add("sticky");
        } else {
            // Scroll UP
            topNavbar.classList.remove("hide");
            nav.classList.remove("sticky");
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
}

$(".nav-link-item").on( "click", function(){
    $(".nav-link-pill").addClass("nav-link-item");
    $(".nav-link-pill").removeClass("nav-active-pill");
    $(this).addClass("nav-active-pill");
});