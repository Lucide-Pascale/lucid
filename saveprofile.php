<?php
// include('connect.php');  // Include your database connection file
// if(isset($_POST["submit"])){
//     $firstName = $_POST['fName'];
//     $lastName = $_POST['lName'];
//     $description = $_POST['description'];
//     $category = $_POST['designerCategory'];
//     $dob= $_POST['dob'];
//     //$profileImage = file_get_contents($_FILES['profilePhoto']['tmp_name']);

// $q="INSERT INTO designerprofile (FirstName,LastName,DOB,CName,Description) VALUES('$firstName','$lastName','$dob','$category','$description')";
// $result=mysqli_query($con,$q);
// }
?>

<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $description = $_POST['description'];
    $category = $_POST['designerCategory'];
    $dob= $_POST['dob'];

    if (isset($_FILES["profilePhoto"]) && $_FILES["profilePhoto"]["error"] == UPLOAD_ERR_OK) {
        $file_name = $_FILES["profilePhoto"]["name"];
        $file_tmp = $_FILES["profilePhoto"]["tmp_name"];
        $target_directory ="uploads/";
        $file_path = $target_directory . uniqid() . $file_name;
        if (move_uploaded_file($file_tmp, $file_path)) {
            $sql = "INSERT INTO designerprofile (FirstName, LastName, DOB,CName,Description,Dimage) 
                    VALUES ('$firstName','$lastName','$dob','$category','$description','$file_path')";
            if ($con->query($sql) === TRUE) {
               header("Location: home page html.php");
            } else {
                echo "Error: " . $con->error;
            }
        } else {
            echo "Error: Failed to move uploaded file to the target directory.";
        }
    } else {
        echo "Error: File upload failed.";
    }
    $connection->close();
}
?>
