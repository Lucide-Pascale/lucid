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
                <li class="nav-link selected"><a href="#registeredusers">Home</a></li>
                <li class="nav-link"><a href="adminpage users.php">Users</a></li>
                <li class="nav-link"><a href="adminpage categories.php">Designers categories</a></li>
                <li class="nav-link"><a href="adminpage showcase.php">Showcase</a></li>
                <li class="nav-link"><a href="landingpage.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <?php

include('connect.php');

$queryUsersStats = "SELECT COUNT(*) as totalUsers FROM users";
$resultUsersStats = mysqli_query($con, $queryUsersStats);
$usersStats = mysqli_fetch_assoc($resultUsersStats);
$x = "SELECT COUNT(*) as totaldesigners FROM designerprofile";
$y = mysqli_query($con, $x);
$z = mysqli_fetch_assoc($y);

$a = "SELECT COUNT(*) as totalbooked FROM bookedappointment";
$b = mysqli_query($con, $a);
$c = mysqli_fetch_assoc($b);

$queryAppointments = "SELECT * FROM bookedappointment";
$resultAppointments = mysqli_query($con, $queryAppointments);
?>

<div class="lifted-background">
        <div class="content">
        <h2>Users Statistics</h2>
        <p>Total Registered Users: <?php echo $usersStats['totalUsers']; ?></p>
        <p>Total Registered Interior Designers: <?php echo $z['totaldesigners']; ?></p>
        <p>Total Total booked Appointment: <?php echo $c['totalbooked']; ?></p>
        </div>
</div>

    <section id="bookedAppointments">
        <h2>Booked Appointments</h2>
        <?php
        if (mysqli_num_rows($resultAppointments) > 0) {
            echo '<table>';
            echo '<tr><th>Appointment ID</th><th>User ID</th><th>Designer ID</th><th>Type</th><th>Date</th><th>Time</th><th>Status</th></tr>';

            while ($appointment = mysqli_fetch_assoc($resultAppointments)) {
                echo '<tr>';
                echo '<td>' . $appointment['appointmentID'] . '</td>';
                echo '<td>' . $appointment['UserID'] . '</td>';
                echo '<td>' . $appointment['DPID'] . '</td>';
                echo '<td>' . $appointment['appointmenttype'] . '</td>';
                echo '<td>' . $appointment['appointmentdate'] . '</td>';
                echo '<td>' . $appointment['appointmenttime'] . '</td>';
                echo '<td>' . $appointment['status'] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No booked appointments found.';
        }
        ?>
    </section>


    <footer>
        <p>&copy; 2024 Lucid Interior Designs</p>
    </footer>
</body>
</html>
