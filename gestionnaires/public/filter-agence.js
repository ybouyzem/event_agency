document.addEventListener('DOMContentLoaded', function() {
    var radioButtons = document.querySelectorAll('input[type="radio"][name="radio"]');
    var cards = document.querySelectorAll(".card-agence");
    var selectMenu = document.getElementById('type-service');
    var selectedRadio ;
    var slider = document.getElementById('myRange');
    var output = document.getElementById('priceDisplay');


    function checkDisplayedCards() {
        var displayedCards = 0;
        document.querySelectorAll(".card-agence").forEach(function(card) {
            if (card.style.display !== "none") {
                displayedCards++;
            }
        });

        if (displayedCards === 0) {
            document.querySelector(".slider-agence").style.display="none";
            document.querySelector(".afficher-tous").style.display="none";
            document.querySelector(".empty-gest").style.display="block";
            
            
        } else {
            document.querySelector(".slider-agence").style.display="block";
            document.querySelector(".afficher-tous").style.display="flex";
            document.querySelector(".empty-gest").style.display="none";
        }
    }

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.checked) {
                slider.value = "900000";
                output.textContent = slider.value + " dh";
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
            checkDisplayedCards();
        });
    });

    //this filter for services, it's a select menu
    selectMenu.addEventListener('change', function()
    {
        
        var selectedService = this.value;
        cards.forEach(function(card) {
            slider.value = "900000";
            output.textContent = slider.value + "dh";
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
        checkDisplayedCards();
    });

    var newcards = document.querySelectorAll(".card-agence");

    var selectedPrice;
    output.textContent = slider.value + " dh" ;
    //change scroler value
    slider.addEventListener('input', function() {
        output.textContent = this.value + " dh" ;
    });
    //this is filter of price
    slider.addEventListener('change', function() {
        selectedPrice = this.value;
        newcards.forEach(function(card) {
            price = parseFloat(card.querySelector("#price").textContent.replace(/[^0-9.-]+/g, ""))
            if ((price> selectedPrice  )){
                card.style.display = "none";
            }
            else
                card.style.display = "block";
        });
        checkDisplayedCards();
        
        
    });
    
   });