
<?php require 'database.php'?>

<?php

$email = $_POST['email'];
$password = $_POST['password'];

$data = "SELECT * FROM admin_tbl";
$result = $conn->query($data);

$incorrectCredintials = true;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (($email == $row["admin_email"]) && ($password == $row["admin_pass"])) {
            session_start(); //start the session after successful authentication
            $_SESSION['adminEmail'] = $email;
            $loggedIn = true;
            break;
        }
    }
}
if ($loggedIn) {
    header("location: admindashboard.php");
    exit();
} else {
    echo '<script>alert("Wrong username or password. Please try again");</script>';
    echo '<script>window.location.href = "admiiinloginPage.php";</script>';
}
?>
