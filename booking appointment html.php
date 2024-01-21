<!-- booking.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking appointment css.css">
    <script defer src="booking appointment js.js"></script>
    <title>Book Appointment - Lucid Interior Designs</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="Photos/logo.PNG" alt="Lucid Interior Designs Logo">
            </div>
            <ul>
                <li><a href="home page html.php">Home</a></li>
                <li><a href="interior designer page html.php">Interior Designers</a></li>
                <li><a href="showcase page html.php">Showcase</a></li>
            </ul>
        </nav>
    </header>

    <section class="booking-section">
        <h1 style="color:#6B240C;">Book an Appointment</h1>

        <div class="booking-details">
            <h3>Designer: ALINE Keza</h3>
            <p>Description: Passionate about creating beautiful and functional living spaces. Specializing in room designs that reflect your personality.</p>
        </div>

        <div class="schedule-form">
            <form id="bookingForm" action="booking.php" method="post">
            <label for="appointmentType">Appointment Type:</label>
            <select id="appointmentType" name="type">
                <option value="video">Video Call</option>
                <option value="inPerson">In Person</option>
            </select>

            <label for="scheduleDate">Select Date:</label>
            <input type="date" id="scheduleDate" name="scheduleDate"required>

            <label for="scheduleTime">Select Time:</label>
            <input type="time" id="scheduleTime" name="scheduleTime" required>
            <button onclick="scheduleAppointment()" type="submit" name="submit">Schedule Appointment</button>
    </form>

            
        </div>
    </section>

    <!-- More sections can be added as needed -->

    <footer>
        <p>&copy; 2024 Lucid Interior Designs</p>
    </footer>
</body>
</html>
