<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$year = $_POST['year'];
$month = $_POST['month'];
$week = $_POST['week'];
$date = $_POST['date'];
$mon = $_POST['mon'];
$tue = $_POST['tue'];
$wed = $_POST['wed'];
 
$sql = "UPDATE `syllabus` SET `year` = '$year', `month` = '$month', `week` = '$week', `mon` = '$mon', `tue` = '$tue', `wed` = '$wed' WHERE `syllabus`.`id` = $id;"; 
$conn->query($sql);
 
header("location:index.php?pesan=update");

?>









