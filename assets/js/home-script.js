
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

// Get modal elements
const modal = document.getElementById("myModal");
const openBtn = document.getElementById("openModal");
const closeBtn = document.querySelector(".close");
const video = document.getElementById("myVideo");


// Open modal on button click
openBtn.addEventListener("click", () => {
modal.style.display = "flex";
});

// Close modal when clicking the close button
closeBtn.addEventListener("click", () => {
modal.style.display = "none";
video.pause(); // Pause the video
video.currentTime = 0; // Reset the video to the start
});

// Close modal when clicking outside the modal content
window.addEventListener("click", (e) => {
if (e.target === modal) {
modal.style.display = "none";
}
});


