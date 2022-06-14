(function () {
    'use strict'
    const forms = document.querySelectorAll('.requires-validation')
    Array.from(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
    
          form.classList.add('was-validated')
        }, false)
      })
    })()
// function validateForm() {
//     let x = document.forms["requires-validation"]["name", "username", "password"].value;
//     if (x == "") {
//       alert("Harap Isi Nama, Username, Password !");
//       return false;
//     }
//   }
    