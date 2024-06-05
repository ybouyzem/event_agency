const sliderTrack = document.querySelector('.slider-track');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let currentIndex = 0;
const cardWidth = document.querySelector('.card-agence').offsetWidth;
const visibleCards = Math.floor(document.querySelector('.slider-agence').offsetWidth / cardWidth);

function updateSliderPosition() {
  sliderTrack.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}

prevButton.addEventListener('click', () => {
  currentIndex = Math.max(currentIndex - 1, 0);
  updateSliderPosition();
});

nextButton.addEventListener('click', () => {
  currentIndex = Math.min(currentIndex + 1, sliderTrack.children.length - visibleCards);
  updateSliderPosition();
});

window.addEventListener('resize', () => {
  updateSliderPosition();
});

  function showDetailGest(gestionnaireId) {
    window.location.href = `/gestionnaire/${gestionnaireId}`;
  }