<?php
$sname = $_POST['name'];
$roll = $_POST['rollno'];
$reg = $_POST['regno'];
$dept = $_POST['dept'];


$link = mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 

mysql_select_db("students", $link) or die("Cannot select the database!");
$query = "INSERT INTO student ( name, rollno, regno, department) values('" . $sname . "', '" . $roll . "', '" . $reg . "', '" . $dept . "')";

if (!mysql_query($query, $link)) {
    die("An unexpected error occured while saving the record, Please try again!");
} else {
    echo "New record saved successfully!";
    header("Location:" . "index.php");
}
?>

