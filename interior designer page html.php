<!-- designers.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="interior designer page css.css">
    <script defer src="interior designer page js.js"></script>
    <title>Interior Designers - Lucid Interior Designs</title>
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

    <section class="designers-section">
        <h1 style="color:#6B240C;">Meet Our Interior Designers</h1>
        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search by name">
            <button onclick="searchDesigners()">Search</button>
        </div>

        <!-- Category Filters -->
        <div class="category-filters">
            <label for="categorySelect">Filter by Category:</label>
            <select id="categorySelect" onchange="filterDesigners()">
                <option value="all">All Categories</option>
                <option value="room">Room Designers</option>
                <option value="light">Light Designers</option>
                <!-- Add more categories as needed -->
            </select>
        </div>

        <!-- Designer Category: Room Designers -->
        <div class="designer-category" id="roomDesigners">
            <h2 style="color:#6B240C;">Room Designers</h2>
             <!-- Designer Profile 1 -->
             <div class="designer-profile">
                <div>
                <img src="Photos/Free Photo _ Close up on attractive carefree young woman sitting on the floor.jpg" alt="Designer 1" width="100px" height="100px">
            </div>
            <div>
                <h3>ALINE Keza</h3>
                <p>Passionate about creating beautiful and functional living spaces. Specializing in room designs that reflect your personality.</p>
                <button class="appointment-button" data-designer="ALINE Keza"><a href="booking appointment html.php" style="text-decoration: none; color: #fff;">Book Appointment</a></button>
            </div>
            </div>

            <!-- Designer Profile 2 -->
            <div class="designer-profile">
                <div>
                <img src="Photos/Ngô Thanh Vân nói gì về về vai diễn trong bom tấn _Starwars__.jpg" alt="Designer 2">
            </div>
            <div>
                <h3>JANET Umuhoza</h3>
                <p>Experienced in transforming rooms into cozy and inviting retreats. Let's work together to make your dream room a reality.</p>
                <button class="appointment-button" data-designer="JANET Umuhoza">Book Appointment</button>
            </div>
            </div>

            <!-- Add more profiles as needed -->

        </div>
        </div>

        <!-- Designer Category: Light Designers -->
        <div class="designer-category" id="lightDesigners">
            <h2 style="color:#6B240C;">Light Designers</h2>

            <!-- Designer Profile 3 -->
            <div class="designer-profile">
                <div>
                <img src="Photos/Tropico Photo.jpg" alt="Designer 3">
            </div>
            <div>
                <h3>JAMES Taylor</h3>
                <p>Bringing illumination and ambiance to your spaces. Specializing in innovative lighting solutions for a modern touch.</p>
                <button class="appointment-button" data-designer="JAMES Taylor">Book Appointment</button>
            </div>
            </div>

            <!-- Add more profiles as needed -->

        </div>

        <!-- More categories and profiles can be added as needed -->
        </div>

        <!-- Add more categories and profiles as needed -->

    </section>

    <footer>
        <p>&copy; 2024 Lucid Interior Designs</p>
    </footer>
</body>
</html>
