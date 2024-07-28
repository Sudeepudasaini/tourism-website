<?php require 'database.php';
if(isset($_GET['cardId'])){
    $cardId=$_GET['cardId'];
    $stmt=$conn->prepare("DELETE FROM trending_tbl WHERE id=?");
    $stmt->bind_param("i",$cardId);
    if($stmt->execute()){
        echo "success";
    }
    header("Location:admindashboard.php");
}
