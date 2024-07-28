
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="loginstyle.css">
   <!-- <style>
      /* Hide the login form initially */
      .popup {
         display: none;
      }
   </style> -->

</head>
<body>
<!-- <div id="loginPopup" class="popup"> -->
<div class="form-container" id="login" style="width: -webkit-fill-available;">

   <form action="admiinlogin.php" method="post">
      <h3>Admin Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">

      <input type="password" name="password" required placeholder="enter your password">

      <input type="submit" name="submit" value="login now" class="form-btn">
      <div class="form-btn">
      <a href="userrloginpage.php" style="text-decoration: none;">Login as user</a>
   </div>
      
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>
</body>
</html>