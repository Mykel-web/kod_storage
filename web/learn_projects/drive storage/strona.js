if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
document.getElementById("update-form").addEventListener('submit', function (e) {
    if (test(this)) return;
    else e.preventDefault();
});
function test(form) {
    var wzory = Array();
    wzory['name'] = /^[a-zA-ZąĄęĘŚśćĆłŁŻżźŻóÓ]{2,30}$/i;
    wzory['surname'] = /^[a-zA-ZąĄęĘŚśćĆłŁŻżźŻóÓ]{2,30}/i;
    wzory['phone'] = /^[1-9]{9,11}/i;
    for (var pole in wzory) {
        if (!wzory[pole].test(form[pole].value)) {
            document.querySelector('#js-error').innerHTML = `Something wrong with ${pole}`;
            form[pole].classList.add("border-danger");
            return false;
        }
        else{
            form[pole].classList.remove("border-danger");
        }
    }
    return true;
}
