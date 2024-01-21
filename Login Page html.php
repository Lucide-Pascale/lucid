<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login Page css.css">
    <script defer src="Login Page js.js"></script>
    <title>Lucid Interior Designs - Login</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@700&display=swap');
</style>
</head>
<body>
    <div class="login-container">
        <h4 style="text-align: center;
    color: #6B240C;">Login to </br>Lucid Interior Designs</h4>
        <form  action="validating.php" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
 
            
            <br>
            <br>
            <input type="submit" name="submit" value="Login">
        </form>
        
    </div>
</body>
</html>
