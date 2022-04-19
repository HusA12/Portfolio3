
let emailCheckbox = document.getElementById('email-checkbox'); // Declaring variables 
let phoneCheckbox = document.getElementById('phone-checkbox');
let firstName = document.getElementById("FirstName").value;
let form = document.getElementById("contact-form");
let date = document.getElementById('dateInput');
let phone = document.getElementById('Phone');
let preference = 0;

let email = document.getElementById('Email').value;

let confirm = document.getElementById('confirmEmail').value;





form.addEventListener("submit", (e) => {    // event listener on Submit

  e.preventDefault(); // don't refresh the pg

  
  if(document.getElementById('email-checkbox').checked) {  //checks which box is checked
    preference = "Email";
  }else if(document.getElementById('phone-checkbox').checked) {
    preference = "Phone";
  }


  let firstName = document.getElementById("FirstName").value;
  let date = document.getElementById('dateInput');
  date =  date.valueAsDate; 
  
  let phone = document.getElementById('Phone').value; 
  let email = document.getElementById('Email').value;
  let confirm = document.getElementById('confirmEmail').value;
  let duration = document.getElementById("durationInput").value;
  let message = document.getElementById("message").value;

  if(email != confirm) {  //confirming email test
    alert("Emails are not the same!");
    return
    } 
  if (isFutureDate(date) == false) { //checks if date is in the future
      alert("Error, the Date must be 1 day in the future");
      return
    }

    
    window.confirm("First Name: "  + (firstName) + "\n Your Email: " + (email) + "\n Your Phone N.O: " +(phone) + "\n You are enquiring on " + (date) + "for " + (duration) + "minutes" + 
          "\n Your preferred method of contact is: " + (preference) + "\n To 210152094@aston.ac.uk" + "\n Your message: " + "\n" + message);

          // Confirm box confirming all the details
      

          
});


function isFutureDate(date){ // checks if date is in the future
  return new Date() < date ;
      
  }


