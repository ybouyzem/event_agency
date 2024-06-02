document.addEventListener('DOMContentLoaded', function() {
    var radioButtons = document.querySelectorAll('input[type="radio"][name="radio"]');
    var cards = document.querySelectorAll(".card-agence");
    var selectMenu = document.getElementById('type-service');
    var selectedRadio ;
    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.checked) {
                selectedRadio = this.value;
                if (this.value === 'Agence') {
                    // Disable cards with type prestataire
                    cards.forEach(function(card) {
                        if (card.querySelector("#type-gest").textContent === "Prestataire" || (selectMenu.value != "all" && selectMenu.value !=  card.querySelector("#type-service").textContent)) {
                            card.style.display = "none";
                        }
                        else
                            card.style.display = "block";
                    });
                } else if (this.value === 'Prestataire') {
                    // Disable cards with type prestataire

                    cards.forEach(function(card) {
                        if (card.querySelector("#type-gest").textContent === "Agence" || (selectMenu.value != "all" && selectMenu.value !=  card.querySelector("#type-service").textContent)) {
                            card.style.display = "none";
                        }
                        else
                        card.style.display = "block";
                    });
                } 
            }
        });
    });

    selectMenu.addEventListener('change', function()
    {
        
        var selectedService = this.value;
        cards.forEach(function(card) {
            if (selectedService == "all")
            {
                radioButtons.forEach(function(radioButton) {
                    radioButton.checked = false;
                });
                card.style.display = "block";
            }
            else if ((card.querySelector("#type-service").textContent != selectedService || (card.querySelector("#type-gest").textContent != selectedRadio && selectedRadio != undefined && selectedService!="all") )){
                card.style.display = "none";
            }
            else
                card.style.display = "block";
        });
    });
});
