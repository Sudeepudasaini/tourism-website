<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
  integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
  integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script src="https://kit.fontawsome.com/c4254e24a8.js"> //icon
</script>
<link rel="stylesheet" href="explore32.css">
</head>

<body>


  

<div class="explore_container" id="explore">
    <h2 style="text-align: center;">Explore</h2>
    <div class="Explore-Destination">

        <?php
        require 'database.php';
        $getData = "SELECT * FROM explore_tbl";
        $result = $conn->query($getData);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
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
                </div>
            <?php
            }
        } else {
            echo "No data available.";
        }
        ?>
    </div>
</div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
  integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="tourismfinal.js"></script>

</body>

</html> 
<!-- *** -->