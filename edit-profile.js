// edit-profile.js

document.addEventListener("DOMContentLoaded", function() {
    const editProfileForm = document.getElementById("editProfileForm");

    editProfileForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting in the default way

        // Get values from form
        const userName = document.getElementById("userName").value;
        const userEmail = document.getElementById("userEmail").value;
        const userPassword = document.getElementById("userPassword").value;
        const profilePicture = document.getElementById("profilePicture").files[0]; // Assuming single file upload

        // Basic Validation
        if (!userName || !userEmail || !userPassword) {
            alert("Please fill out all fields.");
            return;
        }

        // Optionally handle the file upload here
        // For demonstration purposes, we'll just log it to the console
        console.log("Profile Picture File: ", profilePicture);

        // Here you would typically gather the data and send it to the server
        // For this demonstration, we'll just simulate a successful update
        console.log("Name: ", userName);
        console.log("Email: ", userEmail);
        console.log("Password: ", userPassword);
        
        alert("Profile updated successfully!");
        
        // Reset form (optional)
        editProfileForm.reset();
    });
});
