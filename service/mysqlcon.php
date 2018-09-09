<?php
session_start();
$host="localhost";
$username="root";
$password="Hridoy";
$db_name="schoolmanagementsystemdb";
$link=mysqli_connect("$host", "$username", "$password","$db_name");
// mysql_select_db("$db_name")or die("Cannot Select DB");
?>
