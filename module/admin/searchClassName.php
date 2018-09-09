<?php
include_once('main.php');
$string = "<option>SELECT AN OPTION</option>";
$sql = "SELECT * FROM class";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<option value='".$row['id']."'>".$row['name']." [".$row['section']."]</option>";
}
echo $string;
?>
