if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
document.getElementById("b-register").addEventListener("click", () => {
    document.getElementById("register").classList.remove("d-none");
    document.getElementById("login").classList.add("d-none");
    document.getElementById("register-form").addEventListener('submit', function (e) {
        if (test(this)) return;
        else e.preventDefault();
    });
})
document.getElementById("b-login").addEventListener("click", () => {
    document.getElementById("register").classList.add("d-none");
    document.getElementById("login").classList.remove("d-none");
})

function test(form) {
    var wzory = Array();
    wzory['name'] = /^(?=.*[a-z])[a-zA-ZąĄęĘŚśćĆłŁŻżźŻóÓ]{2,30}$/i;
    wzory['surname'] = /^(?=.*[a-z])[a-zA-ZąĄęĘŚśćĆłŁŻżźŻóÓ]{2,30}$/i;
    wzory['email-r'] = /^(?=.*[a-z])[0-9a-zA-Z_.-]+@[0-9a-zA-Z.-]+\.[a-zA-Z]{2,3}$/i;
    wzory['password-r'] = /^(?=.*\d)(?=.*[a-z])[0-9a-zA-Z]{6,30}$/;
    for (var pole in wzory) {
        if (!wzory[pole].test(form[pole].value)) {
            form[pole].classList.add("border-danger");
            return false;
        }
        else{
            form[pole].classList.remove("border-danger");
        }
    }
    if (form['password-r'].value != form['password-r2'].value) {
        form['password-r2'].classList.add("border-danger");
        return false;
    }
    else{
        form['password-r2'].classList.remove("border-danger");
    }
    return true;
}








