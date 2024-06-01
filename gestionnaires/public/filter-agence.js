document.addEventListener('DOMContentLoaded', function() {
    var radioButtons = document.querySelectorAll('input[type="radio"][name="radio"]');
    var cards = document.querySelectorAll(".card-agence");

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.checked) {
                if (this.value === 'agences') {
                    // Disable cards with type prestataire
                    cards.forEach(function(card) {
                        if (card.querySelector("#type-gest").textContent === "Prestataire") {
                            card.style.display = "none";
                        }
                        else
                        card.style.display = "block";
                    });
                } else if (this.value === 'prestataires') {
                    // Disable cards with type prestataire
                    cards.forEach(function(card) {
                        if (card.querySelector("#type-gest").textContent === "Agence") {
                            card.style.display = "none";
                        }
                        else
                        card.style.display = "block";
                    });
                } 
            }
        });
    });
});


// var radioButtons = document.querySelectorAll('input[name="radio"]');
// var cards = document.querySelectorAll(".card-agence");

// radioButtons.forEach(function(radioButton) {
//     radioButton.addEventListener("change", function() {
//         if (radioButton.value === "Prestataires" && radioButton.checked) {
//             cards.forEach(function(card) {
//                 if (card.querySelector("#type-gest").textContent === "Prestataires") {
//                     card.style.display = "none";
//                 }
//             });
//         } else {
//             cards.forEach(function(card) {
//                 card.style.display = "block";
//             });
//         }
//     });
// });
