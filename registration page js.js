document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();
        handleAuthentication('login');
    });

    registerForm.addEventListener('submit', function (event) {
        event.preventDefault();
        handleAuthentication('register');
    });

    function handleAuthentication(action) {
        const usernameInput = action === 'login' ? 'username' : 'newUsername';
        const passwordInput = action === 'login' ? 'password' : 'newPassword';

        const username = document.getElementById(usernameInput).value;
        const password = document.getElementById(passwordInput).value;
        const role = document.getElementById(roleInput).value;

        if (action === 'login') {
            // Simulate authentication (replace with server-side logic in a real application)
            if (username === 'user' && password === 'password') {
                alert('Login successful!');
                // Redirect or perform further actions after successful login
            } else {
                alert('Invalid credentials. Please try again.');
            }
        } else if (action === 'register') {
            // Simulate registration (replace with server-side logic in a real application)
            alert('Registration successful! You can now login.');
            // Redirect or perform further actions after successful registration
        }
    }
});
