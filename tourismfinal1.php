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
  <title>Navigation Bar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="booking.css">
  <link rel="stylesheet" href="tourismfinal.css">
  
  <link rel="stylesheet" href="contributors.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="loginstyle.css">
</head>


  <!-- <link rel="stylesheet" href="login.html"> -->
 
 <script src="https://kit.fontawsome.com/c4254e24a8.js"> //icon
</script>



<body>

  <div class="navbar">
    <div class="logo">
      <a href="#home"><img src="images/ghumghamagency.png" alt="Logo"></a>
    </div>

    <div class="navbar-links">
        <span class="fa fa-home"><a href="#home">Home</a></span>
        <a href="#explore">Explore</a>
        <a href="#trending">Trending Destination</a>
        <a href="#events">Festival and Events</a>
        <a href="#booking">Booking</a>
        <a href="#contributor">Contributor</a>
        <a href="#about">About Us</a>
    </div>
    <div>
      <?php echo $loginSignupBtn ?> 
    </div>
      <!-- <button class="login_button_popup" onclick="showLoginPopup()">Login</button> -->
  </div>
  

  <!-- Add a spacer to prevent content from hiding behind navbar -->
  <div style="height: 70px;"></div>
  


  <div class="home">
    <!--  Home Content goes here -->
    <div class="Home-content" id="home">
      <h1>Explore <span>The Beauty Of Nepal.</span></h1>
      <a href="tourismfinal1.php#explore" class="btn"  style="display: -webkit-inline-box;
    border: solid;
    color: black;">Explore</a>
    </div>
  </div>



  <!-- Add your website content -->



  <!-- card style from here -->



  <!-- card style to here -->


  <!-- // add more cards
    <div class="trending-cards">
      <div class="trending-image">
<img src="Images/second.jpg.jpg">
      </div>
      <div class="Trending-title">
<h1>Title Name</h1>
      </div>

      <div class="description">
        <p>This is the picture of Gosaikunda.</p>
        <button>Read More..</button>

      </div>

    </div>

  
  
  
  </div> -->
  <!-- explore content -->




  <div class="explore_container" id="explore">
    <h2 style="text-align: center;"> Explore</h2>
    <div class="Explore-Destination">








      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/gosaikunda.jpg">
        </div>
        <div class="explore-title">
          <h1>Gosaikunda</h1>
        </div>

        <div class="description">
          <p>This is the picture of Gosaikunda.</p>
          <a href="gosaikunda-des.php"><span id="gosaikunda-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next cards -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/lumbini.jpg">
        </div>
        <div class="explore-title">
          <h1>Lumbini</h1>
        </div>

        <div class="description">
          <p>This is the picture of Lumbini.</p>
          <a href="lumbini-des.php"><span id="lumbini-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/pokahara.jpg">
        </div>
        <div class="explore-title">
          <h1>Pokhara</h1>
        </div>

        <div class="description">
          <p>This is the picture of Pokhara.</p>
          <a href="pokhara-des.php"><span id="pokhara-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/bandipur.jpg">
        </div>
        <div class="explore-title">
          <h1>Bandipur</h1>
        </div>

        <div class="description">
          <p>This is the picture of Bandipur.</p>
          <a href="bandipur-des.php"><span id="bandipur-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/pashupatinath.jpg">
        </div>
        <div class="explore-title">
          <h1>Pashupati</h1>
        </div>

        <div class="description">
          <p>This is the picture of Pashupati Nath Temple.</p>
          <a href="pashupati-des.php"><span id="Pashupati-readmore"><button>Read More..</button></span></a>
        </div>
      </div>

      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/gosaikunda.jpg">
        </div>
        <div class="explore-title">
          <h1>Gosaikunda</h1>
        </div>

        <div class="description">
          <p>This is the picture of Gosaikunda.</p>
          <a href="gosaikunda-des.php"><span id="gosaikunda-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/mustang.jpg">
        </div>
        <div class="explore-title">
          <h1>Mustang</h1>
        </div>

        <div class="description">
          <p>This is the picture of Mustang.</p>
          <a href="mustang.php"><span id="mustang-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/patan durbar sqaure.jpg">
        </div>
        <div class="explore-title">
          <h1>Patan Durbar Square</h1>
        </div>

        <div class="description">
          <p>This is the picture of Patan Durbar square.</p>
          <a href="patandurbar-des.php"><span id="Patan-durbar-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/sagarmatha.jpg">
        </div>
        <div class="explore-title">
          <h1>Sagarmatha</h1>
        </div>

        <div class="description">
          <p>This is the picture of Sagarmatha.</p>
          <a href="sagarmatha-des.php"><span id="sagarmatha-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/swayambunath.jpg">
        </div>
        <div class="explore-title">
          <h1>Swayambunath</h1>
        </div>

        <div class="description">
          <p>This is the picture of Swayambunath.</p>
          <a href="swayambunath-des.php"><span id="Swayambunath-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/rara lake.jpg">
        </div>
        <div class="explore-title">
          <h1>Rara</h1>
        </div>

        <div class="description">
          <p>This is the picture of Rara.</p>
          <a href="rara-des.php"><span id="rara-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/chitwan national park.jpg">
        </div>
        <div class="explore-title">
          <h1>Chitwan</h1>
        </div>

        <div class="description">
          <p>This is the picture of Chitwan.</p>
          <a href="chitwan-des.php"><span id="Chitwan-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->

      <!-- next card -->
      <div class="explore-cards">
        <div class="explore-image">
          <img src="Images/annnapurna.jpg">
        </div>
        <div class="explore-title">
          <h1>Annapurna</h1>
        </div>

        <div class="description">
          <p>This is the picture of Annapurna.</p>
          <a href="annapurna-des.php"><span id="bhaktapur-readmore"><button>Read More..</button></span></a>
        </div>
      </div>


      <!-- add  -->






    </div>

    <!-- <div class="explore-contents" id="explore">
          <h2>Explore</h2>
          <div class="gosaikunda">
            <a href="Hotel-recomendation.html" target="_blank"> <img src="Images/gosaikunda-lake.jpg" alt="gosaikunda"></a>
            <p>gosiakunda</p>
            <p class="des-of-gosaikunda"> A beautiful lake of nepal.</p>
          </div>
        </div> -->
  </div>








  <!-- trending content -->


  <div class="trending-container" id="trending">
    <h2 style="text-align: center;">Trending and Destination</h2>
    <div class="trending-destination">


      <!-- cards start -->

      <!-- trending-cards,trending-image,Trending-title,description -->

      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/gosaikunda-lake.jpg">
        </div>
        <div class="Trending-title">
          <h1>Gosaikunda</h1>
        </div>

        <div class="description">
          <p>This is the picture of Gosaikunda.</p>
          <a href="gosaikunda-des.php"><span id="gosaikunda-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next cards -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/lumbini.jpg">
        </div>
        <div class="Trending-title">
          <h1>Lumbini</h1>
        </div>

        <div class="description">
          <p>This is the picture of Lumbini.</p>
          <a href="lumbini-des.php"><span id="lumbini-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/pokahara.jpg">
        </div>
        <div class="Trending-title">
          <h1>Pokhara</h1>
        </div>

        <div class="description">
          <p>This is the picture of Pokhara.</p>
          <a href="pokhara-des.php"><span id="pokhara-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/bandipur.jpg">
        </div>
        <div class="Trending-title">
          <h1>Bandipur</h1>
        </div>

        <div class="description">
          <p>This is the picture of Bandipur.</p>
          <a href="bandipur-des.php"><span id="bandipur-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/pashupatinath.jpg">
        </div>
        <div class="Trending-title">
          <h1>Pashupati</h1>
        </div>

        <div class="description">
          <p>This is the picture of Pashupati Nath Temple.</p>
          <a href="pashupati-des.php"><span id="Pashupati-readmore"><button>Read More..</button></span></a>
        </div>
      </div>

      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/gosaikunda.jpg">
        </div>
        <div class="Trending-title">
          <h1>Gosaikunda</h1>
        </div>

        <div class="description">
          <p>This is the picture of Gosaikunda.</p>
          <a href="gosaikunda-des.php"><span id="gosaikunda-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/mustang.jpg">
        </div>
        <div class="Trending-title">
          <h1>Mustang</h1>
        </div>

        <div class="description">
          <p>This is the picture of Mustang.</p>
          <a href="mustang.php"><span id="mustang-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/patan durbar sqaure.jpg">
        </div>
        <div class="Trending-title">
          <h1>Patan Durbar Square</h1>
        </div>

        <div class="description">
          <p>This is the picture of Patan Durbar square.</p>
          <a href="patandurbar-des.php"><span id="Patan-durbar-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/sagarmatha.jpg">
        </div>
        <div class="Trending-title">
          <h1>Sagarmatha</h1>
        </div>

        <div class="description">
          <p>This is the picture of Sagarmatha.</p>
          <a href="sagarmatha-des.php"><span id="sagarmatha-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/swayambunath.jpg">
        </div>
        <div class="Trending-title">
          <h1>Swayambunath</h1>
        </div>

        <div class="description">
          <p>This is the picture of Swayambunath.</p>
          <a href="swayambunath-des.php"><span id="Swayambunath-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/rara lake.jpg">
        </div>
        <div class="Trending-title">
          <h1>Rara</h1>
        </div>

        <div class="description">
          <p>This is the picture of Rara.</p>
          <a href="rara-des.php"><span id="rara-readmore"><button>Read More..</button></span></a>
        </div>
      </div>
      <!-- next card -->
      <div class="trending-cards">
        <div class="trending-image">
          <img src="Images/chitwan national park.jpg">
        </div>
        <div class="Trending-title">
          <h1>Chitwan</h1>
        </div>

        <div class="description">
          <p>This is the picture of Chitwan.</p>
          <a href="chitwan-des.php"><span id="Chitwan-readmore"><button>Read More..</button></span></a>
        </div>
      </div>

      <!-- add -->

    </div>
  </div>







  <!-- Festival and Events content -->
<!-- retrieve data of festivals -->
<div class="festivals_container" id="events">
    <h2 style="text-align: center;">festivals</h2>
    <div class="festivals-Destination">

        <?php
        require 'database.php';
        $getData = "SELECT * FROM festivals_tbl";
        $result = $conn->query($getData);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="festivals-cards">
                    <div class="festivals-image">
                        <img src="<?php echo $row['photoPath']; ?>" width="403" height="268">
                    </div>
                    <div class="festivals-title">
                        <h1><?php echo $row['title']; ?></h1>
                    </div>

                    <div class="description">
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
            <?php
            }
        } else {
            echo "No data available.";
        }
        ?>
    </div>
</div>









  <!-- <div class="Festival-events-container" id="events">
    <h1 style="text-align: center;">Festival And Events</h1>
    <div class="Festival"> -->

      <!-- cards start from here -->
      <!-- <div class="Festival-cards">
        <div class="Festival-image">
          <img src="Images/dashain.jpg">
        </div>
        <div class="Festival-title">
          <h1>Pokhara</h1>
        </div>

        <div class="description">
          <p>This is the picture of Dashain festival.</p>
          <a href="description/dashain.html"><span id="dashain-readmore"><button>Read More..</button></span></a>
        </div>
      </div> -->

      <!-- next card -->
      <!-- <div class="Festival-cards">
        <div class="Festival-image">
          <img src="Images/Bhoto Jatra.jpg">
        </div>
        <div class="Festival-title">
          <h1>bandipur</h1>
        </div>

        <div class="description">
          <p>This is the picture of Bhoto Jatra.</p>
          <a href="description/bhotojatra.html"><span id="bhotojatra-readmore"><button>Read More..</button></span></a>
        </div>
      </div> -->
      <!-- next card -->
      <!-- <div class="Festival-cards">
        <div class="Festival-image">
          <img src="Images/prithivi-jayanti-birgunj.jpg">
        </div>
        <div class="Festival-title">
          <h1>Annapurna</h1>
        </div>

        <div class="description">
          <p>This is the picture of Prithivi Jayanti.</p>
          <a href="description/prithivi.html"><span id="prithivi-readmore"><button>Read More..</button></span></a>
        </div>
      </div> -->
      <!-- next card -->
      <!-- <div class="Festival-cards">
        <div class="Festival-image">
          <img src="Images/nepal-new-year-cover.webp">
        </div>
        <div class="Festival-title">
          <h1>Lumbini</h1>
        </div>

        <div class="description">
          <p>This is the picture of New Year Event.</p>
          <a href="description/newyear.html"><span id="newyear-readmore"><button>Read More..</button></span></a>
        </div>
      </div> -->
      <!-- next card -->
      <!-- <div class="Festival-cards">
        <div class="Festival-image">
          <img src="Images/Tihar_oy_festivals_(9)-1624865574.jpg">
        </div>
        <div class="Festival-title">
          <h1>gosaikunda</h1>
        </div>

        <div class="description">
          <p>This is the picture of Tihar festival.</p>
          <a href="description/tihar.html"><span id="tihar-readmore"><button>Read
                More..</button></span></a>
        </div>
      </div> -->


      <!-- add -->












    <!-- </div>
  </div> -->



<!-- Booking content -->

  <section class="booking" id="booking">
    <h1 class="heading-title"> Book your trip</h1>
    <form action="book_form.php" method="post" class="book-form" name="bookingForm" onsubmit="return validateForm()"> 
<div class="flex">
    <div class="bookinputBox">
        <span>name:</span>
        <input type="text" placeholder="Enter your name" name="name">
    </div>
    <div class="bookinputBox">
        <span>email:</span>
        <input type="email" placeholder="Enter your email" name="email">
    </div>
    <div class="bookinputBox">
        <span>phone:</span>
        <input type="number" placeholder="Enter your number" name="phone">
    </div>
    <div class="bookinputBox">
      <span>address:</span>
      <input type="text" placeholder="Enter your address" name="address">
  </div>
    <div class="bookinputBox">
        <span>where to:</span>
       <select name="location" id="location">
       <option value="" disabled selected hidden>Select a place</option>
        <option value="gosasikunda">Gosaikunda</option>
        <option value="pokhara">pokhara</option>
        <option value="patan durbar square">patan durbar square </option>
        <option value="lumbini">Lumbini</option>
        <option value="chitwan">chitwan</option>
        <option value="sagarmatha">sagarmatha</option>
        <option value="Annapurna">Annapurna</option>
        <option value="rara">Rara</option>
        <option value="mustang">Mustang</option>
        <option value="bandipur">Bandipur</option>  
        <option value="swayambunath">Swayambunath</option> 
        <option value="pashupatinath">Pashupatinath</option>
       </select>
    </div>

    <div class="bookinputBox">
        <span>how many:</span>
        <input type="number" placeholder="number of guests" name="guests">
    </div>


    <div class="bookinputBox">
        <span>arrivals:</span>
        <input type="date" name="arrivals" id="ArrivalDate" required onchange="validateArrival()">
        <p id="ArrivalError" style="color: red;"></p>
    </div>


    <div class="bookinputBox">
        <span>leaving:</span>
        <input type="date" name="leaving" id="LeaveDate" required onchange="validateLeave()">
        <p id="LeaveError" style="color: red;"></p>
        <!-- <button type="submit" value="submit" class="bookbtn" name="send" >Submit</button> -->
    </div>
    

</div>
<input type="submit" value="submit" class="bookbtn" name="send">
    </form>


</section>


  <!-- contributor content -->
  <div class="contributor-container" id="contributor">
    <h1 style="text-align: center;">Contributor</h1>
    <br>
    <div class="contributor">
      
      <!-- cards start from here -->
    <div class="contributor-card">
        <div class="card-inner">
            <div class="front-face">
                <img src="Images/sudeep1.jpg"  width="385.91" height="709.71">
            </div>
            <div class="back-face">
                <h2>Sudeep pudasaini</h2>
                <p>I am a Back-End designer.</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/sudeep.pudasaini.969">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/sudeep.pudasaini"> <i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/sudeep.pudasaini/"><i class="fab fa-instagram"></i></a>
                </div>
                <a href="#" class="resumebtn">Resume</a>
            </div>
        </div>
    </div>



    <!-- next card -->
    <div class="contributor-card">
        <div class="card-inner">
            <div class="front-face">
                <img src="Images/silas1.jpg" width="385.91" height="709.71">
            </div>
            <div class="back-face">
                <h2>Silas Shrestha.</h2>
                <p>I am a Front-End designer.</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/silas.fighter">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/sudeep.pudasaini"> <i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/sudeep.pudasaini/"><i class="fab fa-instagram"></i></a>
                </div>
                <a href="#" class="resumebtn">Resume</a>
            </div>
        </div>
    </div>
</div>













</div>

  <!-- About content -->
  <div class="About-content" id="about">
    
    <div class="about">
<div class="about-image">
  <img src="Images/trekkkking.jpg" alt="treking-about">
</div>
<div class="about-content">
  <h3>About us</h3>
  <p> Silas is the user interface designer and Sudeep is the backend designer. We have built many website .And, now we made this website to make it easy for tourists to choose their best destination.</p>
<!-- <a href="about.php" class="about.btn"> Read More...</a> -->
<span class="about-btn"> <button> Read More...</button></span>

</div>












    </div>
  </div>
<!-- footer -->
  <footer>
    <div class="row">
      <div class="col">
        <img src="Images/ghumghamagency.png" class="footer-logo">
        <p>Our website gives the best pick for visting places.</p>
        <br>
        <div id="google_element">
        <h6>Translate to your language</h6>
        <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate">
        </script>
        <script>
        function loadGoogleTranslate(){
          new google.translate.TranslateElement("google_element");
        }
        </script>
</div>

      </div>
        <div class="col">
          <h3>office <div class="underline"><span></span></div></h3>
          <p>Ghumgham agency</p>
          <p>karyabinayak-8, lalitpur</p>
          <p> Zip code=44700,Nepal</p>
          <p class="email-id">Ghumghamagency23@gmail.com</p>
          <h4>+911-9845548454</h4>
        </div>
        <div class="col">
        <h3>Links<div class="underline"><span></span></div></h3>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#explore">Explore</a></li>
          <li><a href="#trending">Trending Destination</a></li>
          <li><a href="#events">Festivals and Destination</a></li>
          <li><a href="#contributor">Contributor</a></li>
          <li><a href="#about">About</a></li>
        </ul>
      </div>
        <div class="col">
        <h3>Newsletter<div class="underline"><span></span></div></h3>
        <form action = 'https://formcarry.com/s/xc03Z8o-YiW' method="post">
          <i class="far fa-envelope"></i>
          <input type="text" name="feedback" placeholder="send feedback" required>
          <button type="submit"><i class="fas fa-arrow-right"></i></button>
        </form>
        <div class="social-icons">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-whatsapp"></i>
         
        </div>
      </div>
    </div>
    <hr>
    <p class="owner"> Developer sudeep and silas.</p>
  </footer>
</div>













  <!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // Function to handle the "Read More" button click
    $('.description button').on('click', function(){
        var url = 'https://www.nepalglaciertreks.com/blog/gosaikunda-lake.html';
        
        // Make an AJAX request
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response){
                // Extract the desired content from the response
                var content = $(response).find('.post-content').html();
                
                // Update the description section with the fetched content
                $('.description').html(content);
            },
            error: function(xhr, status, error){
                console.error('Error fetching content:', error);
            }
        });
    });
});
</script>   -->


  <!-- login content -->
  <!-- <div class="wrapper">
    <span class="icon-close">
      <ion-icon name="close-outline"></ion-icon>
    </span>

    <div class="form-box login">
      <h2>Login</h2>
      <form action="#">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="login-register">
          <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
        </div>
      </form>
    </div>

    <div class="form-box register">
      <h2>Registration</h2>
      <form action="#">
        <div class="input-box">
          <span class="icon"><ion-icon name="person-outline"></ion-icon>
          </span>
          <input type="text" required>
          <label for="">Username</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon>
          </span>
          <input type="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon>
          </span>
          <input type="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">I agree to the terms & conditions </label>

        </div>
        <button type="submit" class="btn">Register</button>
        <div class="login-register">
          <p>Already have an account?
            <a href="#" class="login-link">Login</a>
          </p>
        </div>
      </form>
    </div>
  </div> -->
<!-- 
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="login.js"></script> -->

  <!-- code for login form  -->
<!-- login_form.php -->







<!-- <script src="loginstyle.js"></script> -->

  <!-- <div class="loginwrap">
    <span class="icon-close">
        <ion-icon name="close-outline"></ion-icon>
    </span>

    <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
               <div class="logininput-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label for="">Email</label>
               </div>
               <div class="logininput-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" required>
                <label for="">Password</label>
           </div>
           <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot Password?</a>
           </div>
           <button type="submit" class="loginbtn">Login</button>
           <div class="login-register">
            <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
           </div>
            </form>
    </div>

    <div class="form-box register">
        <h2>Registration</h2>
        <form action="#">
            <div class="logininput-box">
                <span class="icon"><ion-icon name="person-outline"></ion-icon>
                </span>
                <input type="text" required>
                <label for="">Username</label>
           </div>
           <div class="logininput-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon>
                </span>
                <input type="email" required>
                <label for="">Email</label>
           </div>
           <div class="logininput-box">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon>
            </span>
            <input type="password" required>
            <label for="">Password</label>
       </div>
       <div class="remember-forgot">
        <label><input type="checkbox">I agree to the terms & conditions </label>
        
       </div>
       <button type="submit" class="loginbtn">Register</button>
       <div class="login-register">
        <p>Already have an account?
            <a href="#" 
            class="login-link">Login</a></p>
       </div>
        </form>
</div>
</div>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="login.js"></script> -->







  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="tourismfinal.js"></script>

    <!-- to toggle dropdown for user logout  -->
    <script>
        function toggleDropdown(){
            let dropdown = document.querySelector('.dropdown-content');
            dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
        }
    </script>

</body>

 <?php 
    // Check user session
    if (!isset($_SESSION['user_email'])) {
        echo "alert('Please login first!');";
        echo "window.location.href = 'userrloginpage.php';";
        echo "return false;"; // Prevent form submission
    }
?>

<script>
    function validateArrival() {
        var arrivalDate = new Date(document.getElementById("ArrivalDate").value);
        var today = new Date();
        var arrivalError = document.getElementById("ArrivalError");

        if (arrivalDate < today) {
            arrivalError.innerHTML = "Arrival date cannot be less than today";
            document.getElementById("ArrivalDate").value = "";
        } else {
            arrivalError.innerHTML = "";
        }

        // Validate leaving date
        validateLeave();
    }

    function validateLeave() {
        var arrivalDate = new Date(document.getElementById("ArrivalDate").value);
        var leaveDate = new Date(document.getElementById("LeaveDate").value);
        var leaveError = document.getElementById("LeaveError");

        if (leaveDate < arrivalDate) {
            leaveError.innerHTML = "Leave date cannot be less than arrival date";
            document.getElementById("LeaveDate").value = "";
        } else {
            leaveError.innerHTML = "";
        }
    }

    function validateForm() {
        var name = document.forms["bookingForm"]["name"].value;
        var email = document.forms["bookingForm"]["email"].value;
        var phone = document.forms["bookingForm"]["phone"].value;

        // Name validation
        if (!isNaN(name)) {
            alert("Name cannot be a number");
            return false;
        }

        // Email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Invalid email address");
            return false;
        }

        // Phone validation
        if (phone.length !== 10 || isNaN(phone)) {
            alert("Phone number should be a 10-digit number");
            return false;
        }

        // Check user session
        <?php if (!isset($_SESSION['user_email'])) { ?>
            alert('Please login first!');
            window.location.href = 'userrloginpage.php';
            return false; // Prevent form submission
        <?php } ?>

        try {
            // Your other booking handling logic here, if needed
        } catch (error) {
            console.error('Error handling booking:', error.message);
            alert('An error occurred while processing your booking. Please try again later.');
            return false; // Prevent form submission
        }

        // All validations passed
        return true;
    }

</script>


</html>