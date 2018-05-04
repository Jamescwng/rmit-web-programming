if (localStorage) {
  window.onload = populateFields;
}

var remember = document.getElementById('remember');
var submit = document.getElementById('submit');

remember.addEventListener('change', function () {
  if (this.checked) {
    setStorage();
  } else {
    localStorage.clear();
  }
})

submit.addEventListener('click', function (e) {
  document.getElementById('secret').innerHTML = "Woooooooo, now you can use this in your assignment!";
  e.preventDefault();
})

function setStorage() {
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var checkbox = document.getElementById('remember');

  localStorage.setItem('name', name);
  localStorage.setItem('email', email);

  if (checkbox.checked) {
    localStorage.setItem('remember', true);
  }
}

function populateFields() {
  document.getElementById('name').value = localStorage.getItem('name');
  document.getElementById('email').value = localStorage.getItem('email');

  var checked = JSON.parse(localStorage.getItem('remember'));

  if (checked == true) {
    document.getElementById('remember').checked = checked;
  }
}
