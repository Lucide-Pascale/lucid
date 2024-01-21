<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Styles for the pop-up */
    #popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    /* Styles for the overlay background */
    #overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 999;
    }
  </style>
</head>
<body>

<!-- Your content goes here -->
<h1>Welcome to our website!</h1>
<p>Thank you for registering.</p>

<!-- Pop-up and overlay elements -->
<div id="popup">
  <p>Registration successful!</p>
  <button onclick="closePopup()">Close</button>
</div>
<div id="overlay"></div>

<script>
  // Function to display the pop-up
  function showPopup() {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
  }

  // Function to close the pop-up
  function closePopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
  }

  // Call showPopup() function after, for example, a successful registration
  // For demonstration purposes, calling it after 2 seconds
  setTimeout(showPopup, 2000);
</script>

</body>
</html>
