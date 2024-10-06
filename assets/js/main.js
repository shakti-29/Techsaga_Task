// for sticky header

window.onscroll = function () {
  stickyHeader();
};

var header = document.querySelector(".header");
var sticky = header.offsetTop;

function stickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


 // for scroll next section

 document.getElementById('scrollIndicator').addEventListener('click', function() {
    const nextSection = document.getElementById('companies');
    nextSection.scrollIntoView({
        behavior: 'smooth'
    });
});


 //  for company logo paused and running

document.querySelectorAll('.company-container').forEach(card => {
    card.addEventListener('mouseenter', () => {
        document.querySelector('.company-wrapper').style.animationPlayState = 'paused';
    });
    card.addEventListener('mouseleave', () => {
        document.querySelector('.company-wrapper').style.animationPlayState = 'running';
    });
});

// swiper  for course 

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1500: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 30,
        },

        992: {
            slidesPerView: 2.6,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        500: {
            slidesPerView: 1.6,
            spaceBetween: 10,
        },

        50: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
    },
});