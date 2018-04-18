

if (localStorage) {

    var firstname = document.getElementById('firstName').value;
    var lastname  = document.getElementById('lastName').value;
    var email     = document.getElementById('email').value;
    var contact   = document.getElementById('contactNumber').value;

    document.getElementById('rmb_checkbox').addEventListener("click", function setStorage() {
        localStorage.setItem('rmb_firstname', firstname);
        localStorage.setItem('rmb_lastname', lastname);
        localStorage.setItem('rmb_email', email);
        localStorage.setItem('rmb_contact', contact);
    });

}

document.getElementById('liststorage').innerHTML = localStorage.rmb_firstname;
document.getElementById('liststorage').innerHTML = localStorage.rmb_lastname;
document.getElementById('liststorage').innerHTML = localStorage.rmb_email;
document.getElementById('liststorage').innerHTML = localStorage.rmb_contact;
