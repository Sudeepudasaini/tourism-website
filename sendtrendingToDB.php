<?php require 'database.php'?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // handling file upload
    $target_folder = "trendingImage/ ";
    $target_file = $target_folder . basename($_FILES["trending-photo"]["name"]);
    move_uploaded_file($_FILES["trending-photo"]["tmp_name"], $target_file);

    // getting other form data
    $trendingtitle = $_POST["trending-title"];
    $trendingdescription = $_POST["trending-description"];
    $photo = $target_file;

    // inseting data into database
    $stmt = $conn->prepare("INSERT INTO trending_tbl(title, description, photoPath) VALUES(?,?,?)");
    $stmt->bind_param("sss", $trendingtitle, $trendingdescription, $photo);
    if ($stmt->execute() === true) {
        echo "<script>alert('data updated successfully')</script>";
        echo "<script>window.location.href='admindashboard.php'</script>";
    } else {
        die("Error: " . $sql . "<br>" . $conn->connect_error);
    }

    // close connection
    $stmt->close();
    $conn->close();
}
