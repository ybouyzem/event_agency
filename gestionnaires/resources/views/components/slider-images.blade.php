@props(['gestionnaire'])
<div class="slider">
    <div class="slides">
        <div class="slide"><img src="{{ asset('img/' . $gestionnaire->image1) }}" alt="Image 1"></div>
        <div class="slide"><img src="{{ asset('img/' . $gestionnaire->image2) }}" alt="Image 2"></div>
        <div class="slide"><img src="{{ asset('img/' . $gestionnaire->image3) }}" alt="Image 3"></div>
        <div class="slide"><img src="{{ asset('img/' . $gestionnaire->image4) }}" alt="Image 4"></div>
    </div>
    <button class="prev" onclick="moveSlides(-1)"><i class='bx bx-chevron-left'></i></button>
    <button class="next" onclick="moveSlides(1)"><i class='bx bx-chevron-right'></i></button>
</div>

<script>
// scripts.js
document.addEventListener('DOMContentLoaded', () => {
    let slideIndex = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;

    function showSlide(index) {
        if (index >= totalSlides) {
            slideIndex = 0;
        } else if (index < 0) {
            slideIndex = totalSlides - 1;
        } else {
            slideIndex = index;
        }
        const offset = -slideIndex * 100;
        slides.style.transform = `translateX(${offset}%)`;
    }

    function moveSlides(n) {
        showSlide(slideIndex + n);
    }

    // Initialize the first slide
    showSlide(slideIndex);

    // Optional: Auto-slide functionality
    setInterval(() => {
        moveSlides(1);
    }, 3000); // Change slide every 3 seconds

    // Attach moveSlides function to window for button onClick events
    window.moveSlides = moveSlides;
});


</script>