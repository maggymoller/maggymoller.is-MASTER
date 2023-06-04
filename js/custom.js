(function () {

	'use strict'


	AOS.init({
		duration: 800,
		easing: 'slide',
		once: true
	});


	var rellax = new Rellax('.rellax');

	var preloader = function() {

		var loader = document.querySelector('.loader');
		var overlay = document.getElementById('overlayer');

		function fadeOut(el) {
			el.style.opacity = 1;
			(function fade() {
				if ((el.style.opacity -= .1) < 0) {
					el.style.display = "none";
				} else {
					requestAnimationFrame(fade);
				}
			})();
		};

		setTimeout(function() {
			fadeOut(loader);
			fadeOut(overlay);
		}, 200);
	};
	preloader();
	
	



	


	var countdown = function() {
		var el = document.querySelectorAll('.js-countdown');




		if ( el.length > 0 ) {

			const finaleDate = new Date("March 22, 2022 00:00:00").getTime();

			const timer = () =>{
				const now = new Date().getTime();
				let diff = finaleDate - now;

				if(diff < 0){

					document.querySelector('.custom-alert').style.display = 'block';
					document.querySelector('.counter-wrap').style.display = 'none';
				}

				let days = Math.floor(diff / (1000*60*60*24));
				let hours = Math.floor(diff % (1000*60*60*24) / (1000*60*60));
				let minutes = Math.floor(diff % (1000*60*60)/ (1000*60));
				let seconds = Math.floor(diff % (1000*60) / 1000);

				days <= 99 ? days = `0${days}` : days;
				days <= 9 ? days = `00${days}` : days;
				hours <= 9 ? hours = `0${hours}` : hours;
				minutes <= 9 ? minutes = `0${minutes}` : minutes;
				seconds <= 9 ? seconds = `0${seconds}` : seconds;   

				document.querySelector('#days').textContent = days;
				document.querySelector('#hours').textContent = hours;
				document.querySelector('#minutes').textContent = minutes;
				document.querySelector('#seconds').textContent = seconds;

			}
			timer();
			setInterval(timer,1000);
		}
	}

	countdown();

	



	var tinyslier = function() {
		var el = document.querySelectorAll('#testimonial');
		if ( el.length > 0 ) {
			var slider = tns({
				container: "#testimonial",
				items: 1,
				axis: "horizontal",
				swipeAngle: false,
				speed: 400,

				nav: true,
				controls: false,
				controlsPosition: "bottom",
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false,
				"responsive": {
			    "350": {
			      "items": 1
			    },
			    "500": {
			      "items": 1,
			      "gutter": 30,
			    },
			    "768": {
			      "items": 2,
			      "gutter": 30,
			    }
			  },
			});
		}
	}
	tinyslier();

	
	var lightbox = function() {
		var lightboxVideo = GLightbox({
			selector: '.glightbox'
		});
	};
	lightbox();

	var slideIndex = 1;
	showSlide(slideIndex);
	
	function changeSlide(n) {
	  showSlide(slideIndex += n);
	}
	
	function showSlide(n) {
	  var slideshow = document.getElementsByClassName("slides")[0].children;
	  if (n > slideshow.length) {slideIndex = 1;}
	  if (n < 1) {slideIndex = slideshow.length;}
	  for (var i = 0; i < slideshow.length; i++) {
		slideshow[i].style.transform = "translateX(" + ((i - slideIndex + 1) * 100) + "%)";
	  }
	}

	$(document).ready(function(){
		$(window).scroll(function(){
			// sticky navbar on scroll script
			if(this.scrollY > 20){
				$('.navbar').addClass("sticky");
			}else{
				$('.navbar').removeClass("sticky");
			}
			
			// scroll-up button show/hide script
			if(this.scrollY > 500){
				$('.scroll-up-btn').addClass("show");
			}else{
				$('.scroll-up-btn').removeClass("show");
			}
		});
	
		// slide-up script
		$('.scroll-up-btn').click(function(){
			$('html').animate({scrollTop: 0});
			// removing smooth scroll on slide-up button click
			$('html').css("scrollBehavior", "auto");
		});
	
		$('.navbar .menu li a').click(function(){
			// applying again smooth scroll on menu items click
			$('html').css("scrollBehavior", "smooth");
		});
	
		// toggle menu/navbar script
		$('.menu-btn').click(function(){
			$('.navbar .menu').toggleClass("active");
			$('.menu-btn i').toggleClass("active");
		});
	
		// typing text animation script
		var typed = new Typed(".typing", {
			strings: ["saumakona", "forritari", "móðir", "prjónakona", "nörd", "kona", "þúsundþjalasmiður", "hámhorfari", "tónlistarunnandi"],
			typeSpeed: 100,
			backSpeed: 60,
			loop: true
		});
	
		var typed = new Typed(".typing-2", {
			strings: ["saumakona", "forritari", "móðir", "prjónakona", "nörd", "kona", "þúsundþjalasmiður", "hámhorfari", "tónlistarunnandi"],
			typeSpeed: 100,
			backSpeed: 60,
			loop: true
		});
	
		const gap = 16;
	
		const carousel = document.getElementById("carousel"),
		  content = document.getElementById("content"),
		  next = document.getElementById("next"),
		  prev = document.getElementById("prev");
		
		next.addEventListener("click", e => {
		  carousel.scrollBy(width + gap, 0);
		  if (carousel.scrollWidth !== 0) {
			prev.style.display = "flex";
		  }
		  if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
			next.style.display = "none";
		  }
		});
		prev.addEventListener("click", e => {
		  carousel.scrollBy(-(width + gap), 0);
		  if (carousel.scrollLeft - width - gap <= 0) {
			prev.style.display = "none";
		  }
		  if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
			next.style.display = "flex";
		  }
		});
		
		let width = carousel.offsetWidth;
		window.addEventListener("resize", e => (width = carousel.offsetWidth));
		
		});
		let index = 0;
		displayImages();
		function displayImages() {
		  let i;
		  const images = document.getElementsByClassName("image");
		  for (i = 0; i < images.length; i++) {
			images[i].style.display = "none";
		  }
		  index++;
		  if (index > images.length) {
			index = 1;
		  }
		  images[index-1].style.display = "block";
		  setTimeout(displayImages, 200000); 
		}	
	
})()

// Yet another slider, now draggable

// const carousel = document.querySelector(".carousel"),
// firstImg = carousel.querySelectorAll("img")[0],
// arrowIcons = document.querySelectorAll(".wrapper i");
// let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;
// const showHideIcons = () => {
//     // showing and hiding prev/next icon according to carousel scroll left value
//     let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
//     arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
//     arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
// }
// arrowIcons.forEach(icon => {
//     icon.addEventListener("click", () => {
//         let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
//         // if clicked icon is left, reduce width value from the carousel scroll left else add to it
//         carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
//         setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
//     });
// });
// const autoSlide = () => {
//     // if there is no image left to scroll then return from here
//     if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;
//     positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
//     let firstImgWidth = firstImg.clientWidth + 14;
//     // getting difference value that needs to add or reduce from carousel left to take middle img center
//     let valDifference = firstImgWidth - positionDiff;
//     if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
//         return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
//     }
//     // if user is scrolling to the left
//     carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
// }
// const dragStart = (e) => {
//     // updatating global variables value on mouse down event
//     isDragStart = true;
//     prevPageX = e.pageX || e.touches[0].pageX;
//     prevScrollLeft = carousel.scrollLeft;
// }
// const dragging = (e) => {
//     // scrolling images/carousel to left according to mouse pointer
//     if(!isDragStart) return;
//     e.preventDefault();
//     isDragging = true;
//     carousel.classList.add("dragging");
//     positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
//     carousel.scrollLeft = prevScrollLeft - positionDiff;
//     showHideIcons();
// }
// const dragStop = () => {
//     isDragStart = false;
//     carousel.classList.remove("dragging");
//     if(!isDragging) return;
//     isDragging = false;
//     autoSlide();
// }
// carousel.addEventListener("mousedown", dragStart);
// carousel.addEventListener("touchstart", dragStart);
// document.addEventListener("mousemove", dragging);
// carousel.addEventListener("touchmove", dragging);
// document.addEventListener("mouseup", dragStop);
// carousel.addEventListener("touchend", dragStop);

// ChatGPT slider
// const sliderContainer = document.querySelector('.slider-container');
// const sliderItems = document.querySelectorAll('.slider-item');
// const totalItems = sliderItems.length;
// let currentIndex = 0;

// function showSlide(index) {
//   sliderContainer.style.transform = `translateX(-${index * 100}%)`;
// }

// function nextSlide() {
//   currentIndex = (currentIndex + 1) % totalItems;
//   showSlide(currentIndex);
// }

// function prevSlide() {
//   currentIndex = (currentIndex - 1 + totalItems) % totalItems;
//   showSlide(currentIndex);
// }

// setInterval(nextSlide, 3000);

const myCarousel = document.querySelector('#myCarousel');
const carousel = new mdb.Carousel(myCarousel);

var typed = new Typed(".typewriter", {
	// Typewriter options...
  });

  var typed = new Typed(".typewriter", {
	strings: ["saumakona", "forritari", "móðir", "prjónakona", "nörd", "kona", "þúsundþjalasmiður", "hámhorfari", "tónlistarunnandi"],
	typeSpeed: 50,       // Decrease the typing speed
	backSpeed: 30,       // Decrease the backspacing speed
	loop: true,
	loopDelay: 2000      // Decrease the delay between loops
  });