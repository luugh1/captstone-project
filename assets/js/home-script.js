import {modalDisplay} from "./functions.js";
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.option-s');
    const buttons = document.querySelectorAll('.nav-button');

    // Hide all sections initially, except the first
    sections.forEach(section => section.style.display = 'none');
    sections[0].style.display = 'flex'; // Show the first section

    // Set the first button as active
    buttons[0].classList.add('active');

    // Add click event listeners to the buttons
    buttons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action
            const targetId = this.getAttribute('data-target');
            const targetSection = document.getElementById(targetId);

            // Hide all sections
            sections.forEach(section => section.style.display = 'none');

            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));

            // Show the target section
            if (targetSection) {
                targetSection.style.display = 'flex';
            }

            // Add active class to the clicked button
            this.classList.add('active');
        });
    });
});



//Initialize Swiper 

var splide = new Splide('.splide', {
    type: 'loop',
    padding: '5rem',
});

splide.mount();

modalDisplay(document.getElementById("myModal"),document.getElementById("openModal"));


