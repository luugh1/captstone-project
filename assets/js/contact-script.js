import { isEmpty } from './functions.js';
import { isValidEmail } from './functions.js';

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");
    const successMsg = document.getElementById("success-msg");
    form.addEventListener("submit", (event) => {
        event.preventDefault();

        const formData = new FormData(form); // create data object that get all form data from form

        const firstName = formData.get("firstname");
        const lastName = formData.get("lastname");
        const ComName = formData.get("companyname");
        const email = formData.get("email");
        const mobile = formData.get("mobile");
        const comment = formData.get("comment");
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

        if (isEmpty(mobile)) {
            document.getElementById("mobile-error").innerHTML = "Your Mobile Number is Require";
            validSumission = false;
        }

        if (isEmpty(comment)) {
            document.getElementById("comment-error").innerHTML = "Please Write us a Message";
            validSumission = false;
        }

    const inputs = form.querySelectorAll("input, textarea");
        // Add a mousedown event listener to each input field
        inputs.forEach((input) => {
            input.addEventListener("input", function () {
                const errorId = input.id + "-error"; // Match the error message ID
                const errorElement = document.getElementById(errorId);

                // Hide the error message if it exists
                if (errorElement) {
                    errorElement.style.display = "none";
                }
            });
        });

        if (validSumission) {
            $.ajax({
                url: "php_script/contact-script.php",
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
                    successMsg.innerHTML = responses;
                    document.getElementById("contact-btn").innerHTML = "LETS GO";
                    
                }

            })
        }


    })

})
