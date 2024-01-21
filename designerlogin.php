<!-- profile_edit.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="designerlogin css.css">
    <title>Edit Your Profile - Lucid Interior Designs</title>
</head>
<body>

    <header>
        <nav>
            <div class="logo">
                <img src="Photos/logo.PNG" alt="Lucid Interior Designs Logo">
            </div>
            <!-- Add navigation links as needed -->
            <h4>Craft How You Want To Be Seen</h4>
        </nav>
    </header>

    <section class="edit-profile-section">
        <h1> Your Profile</h1>
        <div><h6>Hello, Talented Designer <br> You are welcome to our platform where you can easily meet and interact with different users.<br> <span>All You need is to create your profile</span></h6></div>

        <form action="saveprofile.php" method="post" enctype="multipart/form-data">
            <!-- Photo Upload -->
            <label for="profilePhoto">Upload Your Photo:</label>
            <input type="file" id="profilePhoto" name="profilePhoto" accept="image/*">

            <!-- Name -->
            <label for="fName">First Name:</label>
            <input type="text" id="fName" name="fName" required>
            <label for="lName">Last Name:</label>
            <input type="text" id="lName" name="lName" required>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <label for="designerCategory">Your Interior Design Speciality:</label>
            <select id="designerCategory" name="designerCategory" required>
                <?php
                // Include your database connection file here
                include('connect.php');

                // Fetch categories from the database
                $categories_query = "SELECT CName FROM categories";
                $categories_result = mysqli_query($con, $categories_query);

                // Generate options dynamically
                while ($row = mysqli_fetch_assoc($categories_result)) {
                    echo "<option value='{$row['CName']}'>{$row['CName']}</option>";
                }

                ?>
            </select>
            <br>
            <label for="description">Write about your self:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

           

            <button type="submit" name="submit">Save Profile</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Lucid Interior Designs</p>
    </footer>

</body>
</html>
