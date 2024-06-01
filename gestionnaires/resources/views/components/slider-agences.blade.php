@props(['gestionnaires'])

  <section class="slider-agence">
    <div class="slider-container">
      <div class="slider-track">
        @foreach ($gestionnaires as $gestionnaire)
        <div class="card-agence">
          <div class="image-container">
            <img src="img/{{$gestionnaire->image1}}" alt="">
          </div>
          <label class="favorite">
            <input checked type="checkbox">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000">
              <path d="M12 20a1 1 0 0 1-.437-.1C11.214 19.73 3 15.671 3 9a5 5 0 0 1 8.535-3.536l.465.465.465-.465A5 5 0 0 1 21 9c0 6.646-8.212 10.728-8.562 10.9A1 1 0 0 1 12 20z"></path>
            </svg>
          </label>
          <div class="content">
            <div class="brand">{{$gestionnaire->nom}}</div>
            <div class="other-data">
              <div class="product-name" >Type: <span id="type-gest">{{$gestionnaire->type}}</span></div>
              <div class="product-name">Service: <span>{{$gestionnaire->service}}</span></div>
              <div class="product-name">Prix A partir de : <span> {{$gestionnaire->prix}} dh</span></div>
            </div>
            <div class="rating">
              <svg viewBox="0 0 99.498 16.286" xmlns="http://www.w3.org/2000/svg" class="svg four-star-svg">
                <path fill="#fc0" transform="translate(-0.001 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" id="star-svgrepo-com"></path>
                <path fill="#fc0" transform="translate(20.607 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-2"></path>
                <path fill="#fc0" transform="translate(41.215 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-3"></path>
                <path fill="#fc0" transform="translate(61.823 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-4"></path>
                <path fill="#e9e9e9" transform="translate(82.431 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-5"></path>
              </svg>
              (29,062)
            </div>
          </div>
          <div class="button-container">
            <button class="buy-button button" onclick="showDetailGest({{ $gestionnaire->id }})">Lire Plus</button>
            @if (session('client'))
              <button class="contactbtn"><i class='bx bxs-phone-call' ></i></button>
            @endif
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <button class="prev-button"><i class='bx bxs-left-arrow-circle'></i></button>
    <button class="next-button"><i class='bx bxs-right-arrow-circle'></i></button>
  </section>

  <div class="afficher-tous">
    <a href="">Afichier tous</a>
  </div>
  <script>

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

</script>