<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="explore32.css">
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
</body>
</html>