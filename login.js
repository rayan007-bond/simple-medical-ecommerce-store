document.getElementById('login-form').addEventListener('submit', function (e) {
    e.preventDefault();

    // Get the values entered by the user
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Perform simple validation (you should use more robust validation in a real system)
    if (username === 'user' && password === 'password') {
        alert('Login successful!');
        // Redirect or perform other actions after successful login
    } else {
        alert('Invalid username or password. Please try again.');
    }
});
