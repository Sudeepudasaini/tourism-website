<?php require 'database.php'?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // handling file upload
    $target_folder = "festivalsImage/ ";
    $target_file = $target_folder . basename($_FILES["festivals-photo"]["name"]);
    move_uploaded_file($_FILES["festivals-photo"]["tmp_name"], $target_file);

    // getting other form data
    $festivalstitle = $_POST["festivals-title"];
    $festivalsdescription = $_POST["festivals-description"];
    $photo = $target_file;

    // inseting data into database
    $stmt = $conn->prepare("INSERT INTO festivals_tbl(title, description, photoPath) VALUES(?,?,?)");
    $stmt->bind_param("sss", $festivalstitle, $festivalsdescription, $photo);
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
