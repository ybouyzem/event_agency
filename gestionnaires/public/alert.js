function showPhone(telephone) {
    Swal.fire({
            html: `
              <div style="display: flex; flex-direction: column; align-items: center;">
                <img src="img/phone.png" alt="Phone Icon" style="width: 50px; height: 50px; margin-bottom: 15px;">
                <h2>0${telephone}</h2>
                <p>Nous vous souhaitons une bonne expérience</p>
              </div>
            `,
            showCloseButton: true,
            showConfirmButton: false,
            focusConfirm: false
    });
}

function showConnectAlert()
{
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "vous devez connecter!",
        footer: '<a href="/index/signin">Se connecter</a>'
      });
}