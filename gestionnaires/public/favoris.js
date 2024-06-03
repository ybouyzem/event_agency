
function handleCheckboxChange(checkbox) {

    // Get the necessary attributes from the checkbox element
    var clientId = checkbox.getAttribute('data-client-id') ; // Default to '-1' if data-client-id is not set
    var gestionnaireId = checkbox.getAttribute('data-gestionnaire-id'); // Default to '-1' if data-gestionnaire-id is not set
    var idService = null; // Default to '-1' or set it to a specific value based on your requirements

    var myElement = document.getElementById('checkfavoris');
    var favoriteGests = JSON.parse(myElement.getAttribute('data-favoris'));

    if (!clientId)
    {
      
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "vous devez connecter!",
        footer: '<a href="/index/signin">Se connecter</a>'
      });
      checkbox.checked = false; // Uncheck the checkbox
    }
    else
    {
        var favoriteGestsArray = Array.isArray(favoriteGests) ? favoriteGests : [favoriteGests];
        var gest_exist = 0;

        favoriteGestsArray.forEach(function(gest) {
            if (gest.id_gest == gestionnaireId)
                gest_exist++;
        });
        if (gest_exist == 0)
        {
            var url = `/index/${clientId}/${idService}/${gestionnaireId}`;
            window.location.href = url;

        }
        else
        {
            console.log(gest_exist);

            var url = `/index/delfav/${clientId}/${idService}/${gestionnaireId}`;
            window.location.href = url;
        }

    }
}