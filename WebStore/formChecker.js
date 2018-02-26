let plushToysCheckboxToggler = false;
let staplersCheckboxToggler = false;
let flamethrowersCheckboxToggler = false;
let deodorantToggler = false;

function validateForm() {
  let validForm = true;
  let message = document.getElementById("error-message");

  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  let quantityPlushToys = document.getElementById("quantity-plushtoys").value;
  let quantityStaplers = document.getElementById("quantity-staplers").value;
  let quantityFlamethrowers = document.getElementById("quantity-flamethrowers").value;
  let quantityDeodorants = document.getElementById("quantity-deodorants").value;

  let checkRadio = document.getElementsByTagName("input");
  let checkCheckbox = document.getElementsByTagName("input");
  let isOneChecked = false;

  let plushToySelected = false;
  let staplerSelected = false;
  let flamethrowerSelected = false;
  let deodorantSelected = false;

  //Checking username
  let indexOfAtSymbol = username.indexOf("@");
  if (indexOfAtSymbol === -1 || indexOfAtSymbol === 0 || username[username.length - 4] != '.') {
    validForm = false;
    document.getElementById("username-error").innerHTML = "<p>Please input a valid username.</p>";
  } else {
    document.getElementById("username-error").innerHTML = "";
  }

  //Checking password
  if (password === "") {
    validForm = false;
    document.getElementById("password-error").innerHTML = "<p>Please input a valid password.</p>";
  } else {
    document.getElementById("password-error").innerHTML = "";
  }

  //Checking checkbox buttons and determining which item was selected
  //Code adapted from https://stackoverflow.com/questions/11787665/making-sure-at-least-one-checkbox-is-checked
  for (let i = 0; i  < checkCheckbox.length; i++) {
    if (checkCheckbox[i].type == "checkbox" && checkCheckbox[i].checked) {
      isOneChecked = true;
      switch (i) {
        case 2:
          plushToySelected = true;
          break;
        case 4:
          staplerSelected = true;
          break;
        case 6:
          flamethrowerSelected = true;
          break;
        case 8:
          deodorantSelected = true;
          break;
        default:
          break;
      }
    }
  }
  if (!isOneChecked) {
    validForm = false;
    document.getElementById("checkbox-error").innerHTML = "<p>Please select at least one item.</p>";
  } else {
    document.getElementById("checkbox-error").innerHTML = "";
  }

  //Checking quantity
  if ((plushToySelected) && (isNaN(quantityPlushToys) || quantityPlushToys === "" || quantityPlushToys < 0)) {
    validForm = false;
    document.getElementById("plushtoy-error").innerHTML = "<p>Please input a valid quantity of plush toys.</p>";
  } else {
    document.getElementById("plushtoy-error").innerHTML = "";
  }

  if ((staplerSelected) && (isNaN(quantityStaplers) || quantityStaplers === "" || quantityStaplers < 0)) {
    validForm = false;
    document.getElementById("stapler-error").innerHTML = "<p>Please input a valid quantity of staplers.</p>";
  } else {
    document.getElementById("stapler-error").innerHTML = "";
  }

  if ((flamethrowerSelected) && (isNaN(quantityFlamethrowers) || quantityFlamethrowers === "" || quantityFlamethrowers < 0)) {
    validForm = false;
    document.getElementById("flamethrower-error").innerHTML = "<p>Please input a valid quantity of flamethrowers.</p>";
  } else {
    document.getElementById("flamethrower-error").innerHTML = "";
  }


  if ((deodorantSelected) && (isNaN(quantityDeodorants) || quantityDeodorants === "" || quantityDeodorants < 0)) {
    validForm = false;
    document.getElementById("deodorant-error").innerHTML = "<p>Please input a valid quantity of deodorants.</p>";
  } else {
    document.getElementById("deodorant-error").innerHTML = "";
  }

  //Checking radio bottons
  //Code adapted from https://stackoverflow.com/questions/13060313/checking-if-at-least-one-radio-button-has-been-selected-javascript
  isOneChecked = false;
  for (let i = 0; i < checkRadio.length; i++) {
    if (checkRadio[i].name == "shipping-selection" && checkRadio[i].type == "radio" && checkRadio[i].checked) {
      isOneChecked = true;
    }
  }
  if (!isOneChecked) {
    validForm = false;
    document.getElementById("shipping-error").innerHTML = "<p>Please select an option for shipping.</p>";
  } else {
    document.getElementById("shipping-error").innerHTML = "";
  }

  if (!validForm) {
    message.innerHTML = "<br><p>Wrong Input. Please try again!</p>";
  } else {
    message.innerHTML = "";
  }

  return validForm;

  /*if (validForm) {
    return validForm;
  } else {
    return false;
     window.stop();
    resetForm();
  }*/
}

//Function adapted from http://javascript-coder.com/javascript-form/javascript-reset-form.phtml
function resetForm() {
  oForm = document.getElementById("main-form");
  let frm_elements = oForm.elements;
  for (i = 0; i < frm_elements.length; i++) {
    field_type = frm_elements[i].type.toLowerCase();
    switch (field_type)
    {
    case "text":
        frm_elements[i].value = "";
        break;
    case "radio":
    case "checkbox":
        if (frm_elements[i].checked)
        {
            frm_elements[i].checked = false;
        }
        break;
    default:
        break;
    }
  }
}

function deactivateProductInputBoxes() {
  document.getElementById("quantity-plushtoys").setAttribute("disabled", false);
  document.getElementById("quantity-staplers").setAttribute("disabled", false);
  document.getElementById("quantity-flamethrowers").setAttribute("disabled", false);
  document.getElementById("quantity-deodorants").setAttribute("disabled", false);
}

function activatePlushToysInputBox() {
  if (!plushToysCheckboxToggler) {
    document.getElementById("quantity-plushtoys").removeAttribute("disabled");
    document.getElementById("quantity-plushtoys").focus();
    plushToysCheckboxToggler = true;
  } else {
    document.getElementById("quantity-plushtoys").value = "";
    document.getElementById("quantity-plushtoys").setAttribute("disabled", false);
    plushToysCheckboxToggler = false;
  }

}

function activateStaplersInputBox() {
  if (!staplersCheckboxToggler) {
    document.getElementById("quantity-staplers").removeAttribute("disabled");
    document.getElementById("quantity-staplers").focus();
    staplersCheckboxToggler = true;
  } else {
    document.getElementById("quantity-staplers").value = "";
    document.getElementById("quantity-staplers").setAttribute("disabled", false);
    staplersCheckboxToggler = false;
  }

}

function activateFlamethrowersInputBox() {
  if (!flamethrowersCheckboxToggler) {
    document.getElementById("quantity-flamethrowers").removeAttribute("disabled");
    document.getElementById("quantity-flamethrowers").focus();
    flamethrowersCheckboxToggler = true;
  } else {
    document.getElementById("quantity-flamethrowers").value = "";
    document.getElementById("quantity-flamethrowers").setAttribute("disabled", false);
    flamethrowersCheckboxToggler = false;
  }

}

function activateDeodorantInputBox() {
  if (!deodorantToggler) {
    document.getElementById("quantity-deodorants").removeAttribute("disabled");
    document.getElementById("quantity-deodorants").focus();
    deodorantToggler = true;
  } else {
    document.getElementById("quantity-deodorants").value = "";
    document.getElementById("quantity-deodorants").setAttribute("disabled", false);
    deodorantToggler = false;
  }

}

function submitValidation() {
 if(validateForm()) {
   document.getElementById("main-form").submit();
 } else {
   resetForm();
   deactivateProductInputBoxes();
   plushToysCheckboxToggler = false;
   staplersCheckboxToggler = false;
   flamethrowersCheckboxToggler = false;
   deodorantToggler = false;
   /*document.getElementById("quantity-plushtoys").value = "";
   document.getElementById("quantity-staplers").value = "";
   document.getElementById("quantity-flamethrowers").value = "";
   document.getElementById("quantity-deodorants").value = "";*/
 }
}
