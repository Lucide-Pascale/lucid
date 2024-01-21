<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration page css.css">
    <link rel="stylesheet" href="login Page css.css">
    <script defer src="registration page js.js"></script>
    <title>Lucid Interior Designs - Register</title>
    <style>
        
  

    </style>
</head>
<body>
    <div class="register-container">
        <h1 style="color: #6B240C;">Create an Account</h1>
        <form id="registerForm" action="registering.php" method="post">
            <label for="newUsername">Username:</label>
            <input type="text" id="newUsername" name="newUsername" required>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="newPassword">Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>
            <label for="cPassword">Confirm Password:</label>
            <input type="password" id="cPassword" name="cPassword" required>
            
            <label for="userRole">Who are you?</label>
            <select id="userRole" name="userRole" required>
                <option value="" disabled selected>Select your role</option>
                <option value="interiorDesigner">Interior Designer</option>
                <option value="generalUser">General User</option>
                <option value="Admin">Admin</option>
                
            </select><br><br>


            <button type="submit" name="submit">Register</button>
        </form>
        <p>Already have an account? <a href="Login Page html.php" style="color: #6B240C;">Login here</a></p>
    </div>
</body>
</html>

