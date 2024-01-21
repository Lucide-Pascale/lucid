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
                <li class="nav-link selected"><a href="adminpage users.php">Users</a></li>
                <li class="nav-link"><a href="adminpage categories.php">Designers categories</a></li>
                <li class="nav-link"><a href="adminpage showcase.php">Showcase</a></li>
                <li class="nav-link"><a href="landingpage.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    


    <div id="registeredusers">
        <h2>Registered Users & When they registered </h2>
    <?php
    // Include your database connection file
    include('connect.php');

    // Fetch data from the "users" table
    $query = "SELECT * FROM users";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo '<table>';
        echo '<tr><th>User ID</th><th>User Name</th><th>Role</th><th>Date</th><th>Email</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['UserID'] . '</td>';
            echo '<td>' . $row['Username'] . '</td>';
            //echo '<td>' . $row['Password'] . '</td>';
            echo '<td>' . $row['Role'] . '</td>';
            echo '<td>' . $row['Date'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
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
    <div id="interior">
        <h2>Registered Interior Designers & Their Info</h2>
        <?php
    // Include your database connection file
    include('connect.php');

    // Fetch data from the "users" table
    $query = "SELECT * FROM designerprofile";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo '<table>';
        echo '<tr><th>Designer Profile ID</th><th>First Name</th><th>Last Name</th><th>Date Of Birth</th><th>Speciality</th><th>About them</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['DPID'] . '</td>';
            echo '<td>' . $row['FirstName'] . '</td>';
            echo '<td>' . $row['LastName'] . '</td>';
            echo '<td>' . $row['DOB'] . '</td>';
            echo '<td>' . $row['CName'] . '</td>';
            echo '<td>' . $row['Description'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'Error fetching data: ' . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
    ?>
    

    
   
    <footer>
        <p>&copy; 2024 Lucid Interior Designs</p>
    </footer>
</body>
</html>
