<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - DashBoard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="adminDashboard.css">
</head>
<body>
  <nav class="adminNavbar">
    <span><img src="images/ghumghamagency.png" alt="logo" width="80px"></span>
   <strong> <h2 style="margin-top: 20px;">ADMIN PANEL</h2></strong>
    <ul>
    <strong><li><a href="#exploreadmincontent">Explore</a></li></strong>
     <strong> <li><a href="#trendingadmincontent">Trending</li></strong>
      <strong><li><a href="#festivalsadmincontent">Fist & Festival</a></li></strong>
      <strong><li><a href="#bookadmincontent">Booking</a></li></strong>
    </ul>
    <a href="logout1.php" class="logoutbtn" style="margin-top: 20px;">Logout</a>
    <!-- <span><button class="logoutbtn" style="margin-top: 20px;">LogOut</button></span> -->
  </nav>
  <!-- explore content -->
  <div class="exploreadmincontent" id="exploreadmincontent">
  <div class="heading-and-add-explore">
    <h2>Explore Content</h2>
    <button onclick="openModal1()">Add explore</button>
  </div>
  <div class="exploreform">
  <div class="addExploreCard" id="exploreModal">
        <h2> Add Places</h2>
        <form action="sendexploreToDB.php" method="post" enctype="multipart/form-data">
        <span class="closebtn" onclick="closeform1()">&times;</span>
        <label for="explore-title"> Explore Title:</label>
        <input type="text" class="explore-title" name="explore-title">
        <label for="explore-description"> Explore description </label>
        <input type="text" class="explore-description" name="explore-description">
        <label for="explore-title"> Photo:</label>
        <input type="file" class="explore-photo" name="explore-photo">
        <input type="submit" value="Submit">
        </form>
  </div>
  </div>
 
   <!-- retrieve data of explore -->
    <div class="explore_container">
        <h2 style="text-align: center;">Explore</h2>
        <div class="Explore-Destination">
    
            <?php
            require 'database.php';
            $getData = "SELECT * FROM explore_tbl";
            $result = $conn->query($getData);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $cardId = $row['id'];
                    ?>
                    <div class="explore-cards">
                        <div class="explore-image">
                            <img src="<?php echo $row['photoPath']; ?>">
                        </div>
                        <div class="explore-title">
                            <h1><?php echo $row['title']; ?></h1>
                        </div>
    
                        <div class="description">
                            <p><?php echo $row['description']; ?></p>
                            <a href="gosaikunda-des.php"><span id="gosaikunda-readmore"><button>Read
                                        More..</button></span></a>
                        </div>
                        <a class="deleteExploreBtn" href="delete.php?cardId=<?php echo $cardId; ?>">Delete</a>
                    </div>
                <?php
                }
            } else {
                echo "No data available.";
            }
            ?>
        </div>
    </div>

  </div>
<!-- trending content -->
<div class="trendingadmincontent" id="trendingadmincontent">
  <div class="heading-and-add-trending">
    <h2>trending Content</h2>
    <button onclick="openModal2()">Add trending</button>
  </div>
  <div class="trendingform">
  <div class="addtrendingCard" id="trendingModal">
        <h2> Add Places</h2>
        <form action="sendtrendingToDB.php" method="post" enctype="multipart/form-data">
        <span class="closebtn" onclick="closeform2()">&times;</span>
        <label for="trending-title"> trending Title:</label>
        <input type="text" class="trending-title" name="trending-title">
        <label for="trending-description">trending description </label>
        <input type="text" class="explore-description" name="trending-description">
        <label for="trending-title"> Photo:</label>
        <input type="file" class="trending-photo" name="trending-photo">
        <input type="submit" value="Submit">
        </form>
  </div>
  </div>
 
   <!-- retrieve data of trending -->
    <div class="trending_container">
        <h2 style="text-align: center;">trending</h2>
        <div class="trending-Destination">
    
            <?php
            require 'database.php';
            $getData = "SELECT * FROM trending_tbl";
            $result = $conn->query($getData);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $cardId = $row['id'];
                    ?>
                    <div class="trending-cards">
                        <div class="trending-image">
                            <img src="<?php echo $row['photoPath']; ?>">
                        </div>
                        <div class="trending-title">
                            <h1><?php echo $row['title']; ?></h1>
                        </div>
    
                        <div class="description">
                            <p><?php echo $row['description']; ?></p>
                            <a href="gosaikunda-des.php"><span id="gosaikunda-readmore"><button>Read
                                        More..</button></span></a>
                        </div>
                        <a class="deletetrendingBtn" href="delete.php?cardId=<?php echo $cardId; ?>">Delete</a>
                    </div>
                <?php
                }
            } else {
                echo "No data available.";
            }
            ?>
        </div>
    </div>

  </div>

<!-- festivals content -->
<div class="festivalsadmincontent" id="festivalsadmincontent">
  <div class="heading-and-add-festivals">
    <h2>festivals Content</h2>
    <button onclick="openModal3()">Add festivals</button>
  </div>
  <div class="festivalsform">
  <div class="addfestivalsCard" id="festivalsModal">
        <h2> Add Places</h2>
        <form action="sendfestivalsToDB.php" method="post" enctype="multipart/form-data">
        <span class="closebtn" onclick="closeform3()">&times;</span>
        <label for="festivals-title"> festivals Title:</label>
        <input type="text" class="festivals-title" name="festivals-title">
        <label for="festivals-description"> festivals description </label>
        <input type="text" class="festivals-description" name="festivals-description">
        <label for="festivals-title"> Photo:</label>
        <input type="file" class="festivals-photo" name="festivals-photo">
        <input type="submit" value="Submit">
        </form>
  </div>
  </div>
 
   <!-- retrieve data of festivals -->
    <div class="festivals_container">
        <h2 style="text-align: center;">festivals</h2>
        <div class="festivals-Destination">
    
            <?php
            require 'database.php';
            $getData = "SELECT * FROM festivals_tbl";
            $result = $conn->query($getData);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $cardId = $row['id'];
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
                        <a class="deletefestivalsBtn" href="deletefestivals.php?cardId=<?php echo $cardId; ?>">Delete</a>
                    </div>
                <?php
                }
            } else {
                echo "No data available.";
            }
            ?>
        </div>
    </div>

  </div>





<!-- booking content -->
<!--  reriving and deleting -->
<div class="bookadmincontent" id="bookadmincontent">
    <strong><h1>Booking Information</h1></strong>
<?php
$connection=mysqli_connect('localhost','root','','book_db');

// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Check if delete button is clicked
if(isset($_POST['delete'])){
    $id = $_POST['delete_id'];
    
    // Delete the row from the database
    $delete_query = "DELETE FROM book_form WHERE id = $id";
    mysqli_query($connection, $delete_query);
}

// Select data from the database
$result = mysqli_query($connection, "SELECT * FROM book_form");

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Output data in a table format
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Location</th><th>Guests</th><th>Arrival Date</th><th>Leaving Date</th><th>Action</th></tr>";
    
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["name"]. "</td>";
        echo "<td>" . $row["email"]. "</td>";
        echo "<td>" . $row["phone"]. "</td>";
        echo "<td>" . $row["address"]. "</td>";
        echo "<td>" . $row["location"]. "</td>";
        echo "<td>" . $row["guests"]. "</td>";
        echo "<td>" . $row["arrivals"]. "</td>";
        echo "<td>" . $row["leaving"]. "</td>";
        // Add delete button with form
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='delete_id' value='" . $row['id'] . "'>
                    <input type='submit' name='delete' value='Delete'>
                </form>
            </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
mysqli_close($connection);
?>



</div>


















  <script>
function openModal1() {
    document.getElementById("exploreModal").style.display = "block";
}

// Function to close modal form
function closeform1() {
    document.getElementById("exploreModal").style.display = "none";
}
// Function to open modal form
function openModal2() {
  document.getElementById("trendingModal").style.display = "block";
}

// Function to close modal form
function closeform2() {
  document.getElementById("trendingModal").style.display = "none";
}

// Function to open festivals form


function openModal3() {
    document.getElementById("festivalsModal").style.display = "block";
}

// Function to close modal form
function closeform3() {
    document.getElementById("festivalsModal").style.display = "none";
}
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="admindashboard.js"></script>


  
</body>
</html>