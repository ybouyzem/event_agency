// document.addEventListener('DOMContentLoaded', function() {
//     var radioButtons = document.querySelectorAll('input[type="radio"][name="radio"]');
//     var cards = document.querySelectorAll(".card-agence");

//     radioButtons.forEach(function(radioButton) {
//         radioButton.addEventListener('change', function() {
//             if (this.checked) {
//                 if (this.value === 'agences') {
//                     // Enable all cards
//                     cards.forEach(function(card) {
//                         card.removeAttribute('disabled');
//                     });
//                 } else if (this.value === 'prestataires') {
//                     // Disable cards with type prestataire
//                     cards.forEach(function(card) {
//                         var typeGest = card.querySelector('#type-gest').textContent;
//                         if (typeGest.trim() === 'prestataire') {
//                             card.setAttribute('disabled', 'disabled');
//                         } else {
//                             card.removeAttribute('disabled');
//                         }
//                     });
//                 }
//             }
//         });
//     });
// });


var radioButtons = document.querySelectorAll('input[name="radio"]');
var cards = document.querySelectorAll(".card-agence");

radioButtons.forEach(function(radioButton) {
    radioButton.addEventListener("change", function() {
        if (radioButton.value === "Prestataires" && radioButton.checked) {
            cards.forEach(function(card) {
                if (card.querySelector("#type-gest").textContent === "Prestataires") {
                    card.style.display = "none";
                }
            });
        } else {
            cards.forEach(function(card) {
                card.style.display = "block";
            });
        }
    });
});
