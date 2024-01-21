document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Simulate authentication (replace with server-side logic in a real application)
        //if (username === 'user' && password === 'password') {
            //alert('Login successful!');
            // Redirect or perform further actions after successful login
       // } else {
          //  alert('Invalid credentials. Please try again.');
       // }
    });
});
