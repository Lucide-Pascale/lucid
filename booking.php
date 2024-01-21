<?php
    include("connect.php");
    if(isset($_REQUEST["submit"])){
        $x=$_POST["type"];
        $y=$_POST["scheduleDate"];
        $z=$_POST["scheduleTime"];
    $w="INSERT INTO bookedappointment (appointmenttype,appointmentdate,appointmenttime) VALUES('$x','$y','$z')";
    $h= mysqli_query($con,$w);
    }
?>