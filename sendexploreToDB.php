<?php require 'database.php'?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // handling file upload
    $target_folder = "exploreImage/ ";
    $target_file = $target_folder . basename($_FILES["explore-photo"]["name"]);
    move_uploaded_file($_FILES["explore-photo"]["tmp_name"], $target_file);

    // getting other form data
    $exploretitle = $_POST["explore-title"];
    $exploredescription = $_POST["explore-description"];
    $photo = $target_file;

    // inseting data into database
    $stmt = $conn->prepare("INSERT INTO explore_tbl(title, description, photoPath) VALUES(?,?,?)");
    $stmt->bind_param("sss", $exploretitle, $exploredescription, $photo);
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
