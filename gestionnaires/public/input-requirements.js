//for sig in password requirements
function checkPasswordStrength(input) {
    const password = input.value;
    const strengthBadge = document.getElementById('password-strength');
    const strengthColor = {
        weak: 'red',
        good: 'orange',
        strong: 'green'
    };
    const strengthEmoji = {
        weak: '😞',
        good: '😊',
        strong: '😁'
    };

    let score = 0;

    if (password.length < 8) {
        strengthBadge.textContent = 'Faible ' + strengthEmoji.weak;
        strengthBadge.style.color = strengthColor.weak;
        return;
    }

    if (/[a-z]/.test(password)) {
        score += 1;
    }

    if (/[A-Z]/.test(password)) {
        score += 1;
    }

    if (/\d/.test(password)) {
        score += 1;
    }

    if (/\W/.test(password)) {
        score += 1;
    }

    if (score < 3) {
        strengthBadge.textContent = 'Bien ' + strengthEmoji.good;
        strengthBadge.style.color = strengthColor.good;
    } else if (score === 3) {
        strengthBadge.textContent = 'Fort ' + strengthEmoji.strong;
        strengthBadge.style.color = strengthColor.strong;
    }
}


//for sign up password requirements 
function checkPasswordStrengthSignup(input) {
    const password = input.value;
    const strengthBadge = document.getElementById('password-strength-signup');
    const strengthColor = {
        weak: 'red',
        good: 'orange',
        strong: 'green'
    };
    const strengthEmoji = {
        weak: '😞',
        good: '😊',
        strong: '😁'
    };

    let score = 0;

    if (password.length < 8) {
        strengthBadge.textContent = 'Faible ' + strengthEmoji.weak;
        strengthBadge.style.color = strengthColor.weak;
        return;
    }

    if (/[a-z]/.test(password)) {
        score += 1;
    }

    if (/[A-Z]/.test(password)) {
        score += 1;
    }

    if (/\d/.test(password)) {
        score += 1;
    }

    if (/\W/.test(password)) {
        score += 1;
    }

    if (score < 3) {
        strengthBadge.textContent = 'Bien ' + strengthEmoji.good;
        strengthBadge.style.color = strengthColor.good;
    } else if (score === 3) {
        strengthBadge.textContent = 'Fort ' + strengthEmoji.strong;
        strengthBadge.style.color = strengthColor.strong;
    }
}

function validateEmail(input) {
    const email = input.value.trim();
    const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    input.setCustomValidity(isValid ? '' : "S'il vous plaît, mettez une adresse email valide.");
}

function validatePhoneNumber(input) {
    const phoneNumber = input.value.trim();
    const isValid = /^\d{10}$/.test(phoneNumber);
    input.setCustomValidity(isValid ? '' : "Veuillez saisir un numéro de téléphone valide.");
}