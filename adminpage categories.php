<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking appointment css.css">
    <link rel="stylesheet" href="adminpage.css">
    <title>ADMIN - Lucid Interior Designs</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="Photos/logo.PNG" alt="Lucid Interior Designs Logo">
            </div>
            <h2>Welcome To ADMIN Dashboard</h2>
            <ul>
                <li class="nav-link"><a href="adminpage home.php">Home</a></li>
                <li class="nav-link"><a href="adminpage users.php">Users</a></li>
                <li class="nav-link selected"><a href="adminpage categories.php">Designers categories</a></li>
                <li class="nav-link"><a href="adminpage showcase.php">Showcase</a></li>
                <li class="nav-link"><a href="landingpage.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    


    

    
    <h2>Categories of Interior Designers speciality </h2>
    <div class="lifted-background">
        <div class="content">
        <?php
    include("connect.php");
    $x="";
    
    if(isset($_POST["add"])){
        $x=$_POST["cat"];
        
    $q="INSERT INTO categories (CName) VALUES('$x')";
    $result=mysqli_query($con,$q);
    }
    ?>
    <div>
        <p>
    <form id="add" action="adminpage.php" method="post">
    <label for="category">Write Category name:</label>
            <input type="text" id="category" name="cat" required>
            <button id="addCategoryBtn" name="add">ADD Category</button>
    </form>
</p>
    <div>
        <p>
    <form id="add" action="adminpage.php" method="post">
    <label for="category">Write Category ID You want to delete</label>
            <input type="text" id="category" name="cati" required>
            <button id="addCategoryBtn" name="addi">Delete Category</button>
    </form>
</p>
    <?php
    include("connect.php");
    $y="";
    
    if(isset($_POST["addi"])){
        $y=$_POST["cati"];
        
    $q="DELETE FROM categories WHERE CID = $y";
    $result=mysqli_query($con,$q);
    }
    ?>
    
    </div>
</div></div>
    <?php
   
    include('connect.php');

   
    $query = "SELECT * FROM categories";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo '<table>';
        echo '<tr><th>Speciality Category ID</th><th>Category Name</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['CID'] . '</td>';
            echo '<td>' . $row['CName'] . '</td>';
            
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'Error fetching data: ' . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
    ?>
    
    
    </div>



    
</div>

    
   
    <footer>
        <p>&copy; 2024 Lucid Interior Designs</p>
    </footer>
</body>
</html>
