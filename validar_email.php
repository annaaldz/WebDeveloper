<?php

var email = document.getElementById("email");

function validateEmail(email) {
  var email = /\S+@\S+\.\S+/;
  return email.test(email);
}
    
console.log(validateEmail('texto@texto.com')); // true
console.log(validateEmail('texto@texto')); // false
console.log(validateEmail('texto.com')); // false
console.log(validateEmail('texto')); // false

?>