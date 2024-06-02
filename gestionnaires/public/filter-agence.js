
document.addEventListener('DOMContentLoaded', function() {
    var radioButtons = document.querySelectorAll('input[type="radio"][name="radio"]');
    var cards = document.querySelectorAll(".card-agence");
    var selectMenu = document.getElementById('type-service');
    var selectedRadio ;
    var slider = document.getElementById('myRange');
    var output = document.getElementById('priceDisplay');
    var selectedService;
    var selectedPrice;


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

    //radio filter for type gestionnaires
    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.checked) {
                slider.value = "900000";
                output.textContent = slider.value + " dh";
                selectedRadio = this.value;
                filterFunction(selectedPrice, selectedService, selectedRadio, cards);
            }
            checkDisplayedCards();
        });
    });

    //this filter for services, it's a select menu
    selectMenu.addEventListener('change', function()
    {
        
        selectedService = this.value;
        slider.value = "900000";
        output.textContent = slider.value + "dh";


        filterFunction(selectedPrice, selectedService, selectedRadio, cards);

        checkDisplayedCards();
    });


    output.textContent = slider.value + " dh" ;
    //change scroler value
    slider.addEventListener('input', function() {
        output.textContent = this.value + " dh" ;
    });
    //this is filter of price
    slider.addEventListener('change', function() {
        selectedPrice = this.value;

        filterFunction(selectedPrice, selectedService, selectedRadio, cards);
        checkDisplayedCards();
    });
    
   });



function filterFunction(selectedPrice, selectedService, selectedType, cards)
{
    cards.forEach(function(card) {
        price = parseFloat(card.querySelector("#price").textContent.replace(/[^0-9.-]+/g, ""));
        if (price <= selectedPrice || selectedPrice == undefined)
        {

            if (card.querySelector("#type-service").textContent == selectedService || selectedService == undefined || selectedService == "all")
            {
                console.log(selectedService);

                if (card.querySelector("#type-gest").textContent == selectedType || selectedType == undefined)
                    card.style.display="block";
                else
                    card.style.display="none";

            }
            else
                card.style.display="none";
        }
        else
            card.style.display="none";
    });
}