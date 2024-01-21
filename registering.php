<?php
include("connect.php");
$name="";
$pass= "";
$role= "";
$email= "";
$c="";
if(isset($_POST["submit"])){
    $name=$_POST["newUsername"];
    $pass=$_POST["newPassword"];
    $role=$_POST["userRole"];
    $email=$_POST["email"];
    $c=$_POST["cPassword"];
}
//declaring variables
$user_check_query = "SELECT * FROM users WHERE Username='$name' OR email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);

    if (!$result) {
        die('Error: ' . mysqli_error($db));
    }

    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['Username'] === $name) {
            echo'<script>alert("Username already exists");</script>';
        }
        if ($user['email'] === $email) {
            echo'<script>alert("Email already exists,Try Another Email");</script>';
        }
    }

else if($c!=$pass){
    echo '<script>alert("Passwords do not match");</script>';
   
}
else{
$q="INSERT INTO users (Username,Password,Role,email) VALUES('$name','$pass','$role','$email')";
$result=mysqli_query($con,$q);

if($role== "interiorDesigner"){
   
    header("Location: designerlogin.php");
    echo "Registered successfullly!";
}
else{
    echo "User registered successfully!";
    header("Location:Login Page html.php");
}
}

?>