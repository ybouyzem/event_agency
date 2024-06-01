// document.addEventListener('DOMContentLoaded', function() {
//     var radioButtons = document.querySelectorAll('input[type="radio"][name="radio"]');
//     var cards = document.querySelectorAll(".card-agence");
//     var selectMenu = document.getElementById('type-service');

//     radioButtons.forEach(function(radioButton) {
//         radioButton.addEventListener('change', function() {
//             if (this.checked) {
//                 if (this.value === 'agences') {
//                     // Disable cards with type prestataire
//                     cards.forEach(function(card) {
//                         if (card.querySelector("#type-gest").textContent === "Prestataire") {
//                             card.style.display = "none";
//                         }
//                         else
//                         card.style.display = "block";
//                     });
//                 } else if (this.value === 'prestataires') {
//                     // Disable cards with type prestataire
//                     cards.forEach(function(card) {
//                         if (card.querySelector("#type-gest").textContent === "Agence") {
//                             card.style.display = "none";
//                         }
//                         else
//                         card.style.display = "block";
//                     });
//                 } 
//             }
//         });
//     });

//     selectMenu.addEventListener('change', function()
//     {
//         var selectedService = this.value;
//         console.log(selectedService);

//         cards.forEach(function(card) {
//             if (card.querySelector("#type-service").textContent != selectedService && selectedService != "all") {
//                 card.style.display = "none";
//             }
//             else
//                 card.style.display = "block";
//         });
//     });
// });





document.addEventListener('DOMContentLoaded', function() {
    var radioButtons = document.querySelectorAll('input[type="radio"][name="radio"]');
    var cards = document.querySelectorAll(".card-agence");
    var selectMenu = document.getElementById('type-service');

    var type="all";
    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.checked) {
                if (this.value === 'agences') {
                    type="agences";
                    // Disable cards with type prestataire
                    cards.forEach(function(card) {
                        if (card.querySelector("#type-gest").textContent === "Prestataire") {
                            card.style.display = "none";
                        }
                        else
                        {
                            selectMenu.addEventListener('change', function()
                            {
                                var selectedService = this.value;
                                console.log(selectedService);
                        
                                cards.forEach(function(card) {
                                    if (card.querySelector("#type-service").textContent != selectedService && selectedService != "all" ) {
                                        card.style.display = "none";
                                    }
                                    else
                                        card.style.display = "block";
                                });
                            });
                        }
                    });
                } else if (this.value === 'prestataires') {
                    
                    // Disable cards with type prestataire
                    cards.forEach(function(card) {
                        if (card.querySelector("#type-gest").textContent === "Agence") {
                            card.style.display = "none";
                        }
                        else
                        {
                            selectMenu.addEventListener('change', function()
                            {
                                var selectedService = this.value;
                                console.log(selectedService);
                        
                                cards.forEach(function(card) {
                                    if (card.querySelector("#type-service").textContent != selectedService && selectedService != "all" ) {
                                        card.style.display = "none";
                                    }
                                    else
                                        card.style.display = "block";
                                });
                            });
                        }
                    });
                } 
            }
        });
    });
    selectMenu.addEventListener('change', function()
    {
        var selectedService = this.value;
        console.log(selectedService);

        cards.forEach(function(card) {
            if (card.querySelector("#type-service").textContent != selectedService && selectedService != "all") {
                card.style.display = "none";
            }
            else {
                radioButtons.forEach(function(radioButton) {
                    radioButton.addEventListener('change', function() {
                        if (this.checked) {
                            if (this.value === 'agences') {
                                type="agences";
                                // Disable cards with type prestataire
                                cards.forEach(function(card) {
                                    if (card.querySelector("#type-gest").textContent === "Prestataire") {
                                        card.style.display = "none";
                                    }
                                    else
                                    {
                                        selectMenu.addEventListener('change', function()
                                        {
                                            var selectedService = this.value;
                                            console.log(selectedService);
                                    
                                            cards.forEach(function(card) {
                                                if (card.querySelector("#type-service").textContent != selectedService && selectedService != "all" ) {
                                                    card.style.display = "none";
                                                }
                                                else
                                                    card.style.display = "block";
                                            });
                                        });
                                    }
                                });
                            } else if (this.value === 'prestataires') {
                                
                                // Disable cards with type prestataire
                                cards.forEach(function(card) {
                                    if (card.querySelector("#type-gest").textContent === "Agence") {
                                        card.style.display = "none";
                                    }
                                    else
                                    {
                                        selectMenu.addEventListener('change', function()
                                        {
                                            var selectedService = this.value;
                                            console.log(selectedService);
                                    
                                            cards.forEach(function(card) {
                                                if (card.querySelector("#type-service").textContent != selectedService && selectedService != "all" ) {
                                                    card.style.display = "none";
                                                }
                                                else
                                                    card.style.display = "block";
                                            });
                                        });
                                    }
                                });
                            } 
                        }
                    });
                });
            }
        });
    });
});

