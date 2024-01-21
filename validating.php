
<?php
session_start();

// Include your database connection file
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform a query to check if the user exists in the database
    $query = "SELECT * FROM users WHERE email = '$email' AND Password = '$password'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // User exists, set session variable and redirect to the homepage
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['UserID'];
        $x=$user['Role'];
        if ($x=="Admin"){
            header("Location: adminpage home.php");
        }
        else if($x== "generalUser"){
        header("Location: home page html.php");  // Redirect to your homepage
        }
        else if($x== "interiorDesigner"){
            header("Location: home page html.php");
        }
        exit();
    }
     else {
        // User does not exist or incorrect credentials, display an error message
        echo "Invalid username or password. Please try again.";
    }
}

// Close the database connection
mysqli_close($con);













// if(isset($_REQUEST["submit"])){
//     $name=$_POST["username"];
//     $pass=$_POST["password"];
//     $role=$_POST["role"];
//     if($role== "admin"&& $pass== "123" && $name== "lucpas15nov@gmail.com"){
//         // echo "Registered successfullly!";
//          header("Location:adminpage.php");
//      }
//      else if($role== "interiorDesigner"|| $role== "generalUser"){
//          header("Location:home page html.php");
//      }
// }

?>