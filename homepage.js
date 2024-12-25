// Change navbar background on scroll
window.addEventListener("scroll", function () {
    const header = document.querySelector(".header"); // Select the header element
    if (header) {
        header.classList.toggle("scrolled", window.scrollY > 50);
    }
});

// Add confirmation dialog on logout
document.addEventListener("DOMContentLoaded", function () {
    const logoutButton = document.querySelector(".btn-logout"); // Select the logout button
    if (logoutButton) {
        logoutButton.addEventListener("click", function (event) {
            const confirmLogout = confirm("Apakah benar Anda ingin log out dari Santapin?");
            if (!confirmLogout) {
                event.preventDefault(); // Prevent default action if user cancels
            }
        });
    }
});
