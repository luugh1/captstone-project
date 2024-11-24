export function isEmpty(value) {
    return value.trim() === "";
}

export function isValidEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

export function modalDisplay(modal,openBtn){      
// Get modal elements
const closeBtn = (document.querySelector(".close")) ? document.querySelector(".close") : "";
const video = (document.getElementById("myVideo")) ? document.getElementById("myVideo") : "";
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
}

