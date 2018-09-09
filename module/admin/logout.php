<?php
include ('../../service/mysqlcon.php');
session_unset();
session_destroy();
header("Location: ../../");
?>
