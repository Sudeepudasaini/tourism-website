<?php require 'userDatabaseConnection.php'?>

<?php

$loggedIn = false; // Initialize $loggedIn variable

$email = $_POST['email'];
$password = $_POST['password'];

$data = "SELECT * FROM user_form";
$result = $conn->query($data);

$incorrectCredintials = true;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (($email == $row["email"]) && ($password == $row["password"])) {
            session_start(); //start the session after successful authentication
            $_SESSION['user_email'] = $email;
            $loggedIn = true;
            break;
        }
    }
}
if ($loggedIn) {
    header("location: tourismfinal1.php");
    exit();
} else {
    echo '<script>alert("Wrong username or password. Please try again");</script>';
    echo '<script>window.location.href = "userrloginpage.php";</script>';
}
?>
