<style>
    /* Additional styles for carousel */
    .carousel {
      overflow: hidden;
      position: relative;
      width: 100%;
    }
    .carousel-track {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
    .carousel-slide {
      min-width: 100%;
      box-sizing: border-box;
    }
  </style>

<div class="carousel">
    <div class="container mx-auto mt-10">
        <div class="carousel relative">
          <!-- Carousel Track -->
          <div class="carousel-track flex">
            <!-- Slide 1 -->
            <div class="carousel-slide">
              <img src="https://via.placeholder.com/800x400?text=Slide+1" alt="Slide 1" class="w-full h-auto">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-slide">
              <img src="https://via.placeholder.com/800x400?text=Slide+2" alt="Slide 2" class="w-full h-auto">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-slide">
              <img src="https://via.placeholder.com/800x400?text=Slide+3" alt="Slide 3" class="w-full h-auto">
            </div>
          </div>
          <!-- Previous Button -->
            <button id="prevButton" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-6 py-4 text-lg">
        &larr;
            </button>
      <!-- Next Button -->
            <button id="nextButton" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-6 py-4 text-lg">
        &rarr;
      </button>
        </div>
      </div>
    
</div>
      <script>
        const track = document.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const nextButton = document.querySelector('#nextButton');
        const prevButton = document.querySelector('#prevButton');
        const slideWidth = slides[0].getBoundingClientRect().width;
    
        // Arrange the slides next to one another
        slides.forEach((slide, index) => {
          slide.style.left = slideWidth * index + 'px';
        });
    
        const moveToSlide = (track, currentSlide, targetSlide) => {
          track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
          currentSlide.classList.remove('current-slide');
          targetSlide.classList.add('current-slide');
        }
    
        prevButton.addEventListener('click', () => {
          const currentSlide = track.querySelector('.current-slide');
          const prevSlide = currentSlide.previousElementSibling;
          if (prevSlide) {
            moveToSlide(track, currentSlide, prevSlide);
          }
        });
    
        nextButton.addEventListener('click', () => {
          const currentSlide = track.querySelector('.current-slide');
          const nextSlide = currentSlide.nextElementSibling;
          if (nextSlide) {
            moveToSlide(track, currentSlide, nextSlide);
          }
        });
    
        // Set the first slide as the current slide
        slides[0].classList.add('current-slide');
      </script>