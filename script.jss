document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Perform validation and login logic here
    // For this example, we will simply log the credentials to the console
    console.log("Username: " + username);
    console.log("Password: " + password);
});
