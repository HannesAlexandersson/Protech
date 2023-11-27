// drop down menu logic
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

// Email collector logic
var emailList = [];
/* function showEmailInput() {
  var emailInputContainer = document.getElementById("emailInputContainer");
  emailInputContainer.style.display = "flex";
} */
function showEmailInput() {
  var promptMessage = "Ange din e-postadress:";
  var emailAddress = prompt(promptMessage);

  if (emailAddress) {
      // Lägg till e-postadressen i arrayen
      emailList.push(emailAddress);

      // Visa ett meddelande eller uppdatera användargränssnittet
      alert("E-postadress inskickad: " + emailAddress);
  } else {
      // Användaren klickade på "Avbryt" i prompten
      alert("Du avbröt inskickningen av e-postadressen.");
  }
}
