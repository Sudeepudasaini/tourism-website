
<?php
$loginSignupBtn = '<a href="userrloginpage.php">Login/Signin</a>';
session_start();
if (isset($_SESSION['user_email'])) {
    $email = $_SESSION['user_email'];
    $firstLetterAvatar = strtoupper(substr($email, 0, 1));
    $loginSignupBtn = <<<dropdown
            <div class="userDropdown">
                <div class="avatar" onclick="toggleDropdown()">$firstLetterAvatar</div>
                <div class="dropdown-content" id="droppedDownContent">
                    <h3>$firstLetterAvatar</h3>
                    <p>$email</p>
                   
                 
                    <a id ="logout" href="userlogout.php">Log out</a>
                </div>
            </div>
        dropdown;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="tourismfinal.css">
  <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
<div class="navbar">
    <div class="logo">
      <a href="#home"><img src="images/ghumghamagency.png" alt="Logo"></a>
    </div>
    <div class="navbar-links">
      <span class="fa fa-home"><a href="#home">Home</a></span>
      <a href="tourismfinal1.php#explore">Explore</a>
      <a href="tourismfinal1.php#trending">Trending Destination</a>
      <a href="tourismfinal1.php#events">Festival and Events</a>
      <a href="tourismfinal1.php#booking">Booking</a>
      <a href="tourismfinal1.php#contributor">Contributor</a>
      <a href="tourismfinal1.php#about">About Us</a>
      <!-- <a href="#login">Login/Signin</a> -->
      
    </div>
    <div>
      <?php echo $loginSignupBtn ?> 
    </div>
  </div>
</body>
</html>

