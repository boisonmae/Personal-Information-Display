document.addEventListener("DOMContentLoaded", () => {
    console.log("JS Loaded");

    const form = document.getElementById("infoForm");
    
    if (form) {
        form.addEventListener("submit", () => {
            alert("Proceeding to review your information...");
        });
    }
});
