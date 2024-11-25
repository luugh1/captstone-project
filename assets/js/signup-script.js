import { isEmpty } from './functions.js';
import { isValidEmail } from './functions.js';

document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("signModal");
    const closeBtn = (document.querySelector(".close")) ? document.querySelector(".close") : "";

// Close modal when clicking the close button
closeBtn.addEventListener("click", () => {
modal.style.display = "none";
});

// Close modal when clicking outside the modal content
window.addEventListener("click", (e) => {
if (e.target === modal) {
modal.style.display = "none";
}
});
    const form = document.getElementById("sign-up-form");
    form.addEventListener("submit", (event) => {
        event.preventDefault();

        const formData = new FormData(form); // create data object that get all form data from form

        const firstName = formData.get("firstname");
        const lastName = formData.get("lastname");
        const password = formData.get("password");
        const verifyPassword = formData.get("verify_password");
        const email = formData.get("email");
        const address = formData.get("address");
        let validSumission = true;

        if (isEmpty(firstName)) {
            document.getElementById("firstname-error").innerHTML = "Your First Name is Require";
            validSumission = false;
        }

        if (isEmpty(lastName)) {
            document.getElementById("lastname-error").innerHTML = "Your Last Name is Require";
            validSumission = false;
        }

        if (isEmpty(email)) {
            document.getElementById("email-error").innerHTML = "Your Email is Require";
            validSumission = false;
        } else if (!isValidEmail(email)) {
            document.getElementById("email-error").innerHTML = "Please Provide a Valid Email Address";
            validSumission = false;
        }

        if (isEmpty(password)) {
            document.getElementById("password-error").innerHTML = "Your Password is Require";
            validSumission = false;
        }

        if (isEmpty(verifyPassword)) {
            document.getElementById("verify_password-error").innerHTML = "Please Verify Your is Require";
            validSumission = false;
        }

        if(verifyPassword != password){
            document.getElementById("verify_password-error").innerHTML = "Your Password does not Match";
            validSumission = false;
        }

        if (isEmpty(address)) {
            document.getElementById("address-error").innerHTML = "Please Write us a Message";
            validSumission = false;
        }

    const inputs = form.querySelectorAll("input");
        // Add a mousedown event listener to each input field
        inputs.forEach((input) => {
            input.addEventListener("input", function () {
                const errorId = input.id + "-error"; // Match the error message ID
                const errorElement = document.getElementById(errorId);

                // Hide the error message if it exists
                if (errorElement) {
                    errorElement.innerHTML = "";
                }
            });
        });

        if (validSumission) {
            $.ajax({
                url: "php_script/registration-script.php",
                type: "POST",
                data: formData,
                processData: false, // Prevent jQuery from converting the data
                contentType: false,
                beforeSend: () => {
                    document.getElementById("contact-btn").innerHTML = `
  <div class="spinner">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>`;
                },
                success: (responses) => {
                    modal.style.display = "flex";
                   let item =  JSON.parse(responses);
                   if(item.message == "success"){
                    document.getElementById("message").innerHTML = `
                   <div class='success-msg'> <h1>Registration Successful</h1>
                    <p>Thanks for registrating with us, we look forward to doing business with you</p>
                    <a href="login.php" class='startedBtn'>Login Now</a>
                    </div>
                    `;
                   }else{
                   
                    document.getElementById("message").innerHTML = `
                    <div class="failed-msg">
                    <h1>Registration Failed</h1>
                    <p>Looks like you already have an account with us, 
                    click the link below if you forget your password</p>
                    <a href="login.php" class='startedBtn'>Recover Password Now</a>
                    </div>
                    `;
                   }
                    
                    document.getElementById("contact-btn").innerHTML = "LETS GO";
                    
                }

            })
        }


    })

})
