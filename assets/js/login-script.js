import { isEmpty } from './functions.js';
import { isValidEmail } from './functions.js';

document.addEventListener("DOMContentLoaded", function () {
const email = document.getElementById("email");
const password = document.getElementById("password");
let loginBtn = document.getElementById("login-btn");
let loginForm = document.getElementById("login-form");
let validDetail = true;

loginForm.addEventListener("submit", (event) =>{
 event.preventDefault(); 
 const formData = new FormData(loginForm);

if(isEmpty(email.value)){
    document.getElementById("email-error").innerHTML = "Your Email is Required";
    validDetail = false;

}else if(!isValidEmail(email.value)){
    document.getElementById("email-error").innerHTML = "Please Enter a Valid Email";
    validDetail = false;
}

if(isEmpty(password.value)){
    document.getElementById("password-error").innerHTML = "Please Enter Your Password!";
    validDetail = false;
}

if(validDetail){
    console.log( {
        formData
    })
    $.ajax({
        url: "php_script/login-script.php",
        type: "POST",
        processData: false, // Prevent jQuery from converting the data
        contentType: false,
        data: formData,
        beforeSend: () => {
            document.getElementById("login-btn").innerHTML = `
<div class="spinner">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>`;
        },
        success: (response) =>{
           console.log(response)
           document.getElementById("login-btn").innerHTML ="Sign In"
        },
        error: (xhr, status, error) => {
            document.getElementById("success-msg").innerHTML = "Unable to process login. Please try again.";
        }

    })
}

});

const inputs = loginForm.querySelectorAll("input");
inputs.forEach(item => {
    item.addEventListener("input", () =>{
        const errorId = item.id + "-error"; // Match the error message ID
        const errorElement = document.getElementById(errorId);

        // Hide the error message if it exists
        if (errorElement) {
            errorElement.innerHTML = "";
        } 
    });
});

})