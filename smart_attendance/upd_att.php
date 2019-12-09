<?php
include '../inc/dbconnection.php';
if(isset($_POST['intern_id'])) {
    	$intern_id = $_POST['intern_id'];
    	$date = $_POST['date'];
    	$month = $_POST['month'];
    	$year = $_POST['year'];
        // echo '<script>alert("Hello! I am an alert box!!");</script>';
        $q1 = "UPDATE ".$month.$year." SET d".$date."='A' WHERE intern_id='$intern_id'";
        $res1 = mysqli_query($link, $q1);
    }
?>
