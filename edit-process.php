<?php
$id = $_POST['id'];
$sname = $_POST['name'];
$roll = $_POST['rollno'];
$reg = $_POST['reg'];
$dept = $_POST['dept'];

$link = mysql_connect("localhost","root", "") or die("Cannot Connect to the database!");

mysql_select_db("students", $link) or die("Cannot select the database!");
$query = "UPDATE student SET name='" . $sname . "', rollno='" . $roll . "', regno='" . $reg . "', department='" . $dept . "' WHERE id='" . $id . "'";
if (!mysql_query($query, $link)) {
    die("An unexpected error occured while saving the record, Please try again!");
} else {
    echo "Record updated successfully!";
    header("Location:" . "index.php");
}
?>