<?php
require 'mysqlcon.php';
$myid=$_POST['myid'];
$mypassword=$_POST['mypassword'];
$_SESSION['login_id']=$myid;
$sql="SELECT usertype FROM users WHERE userid='$myid' and password=$mypassword";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);
echo $count;
$obj = mysqli_fetch_object($result);
$control= $obj->usertype;
echo $control;
 if($count!=1 || !isset($control)){
     //header("Location:../index.php");
 }
if($count==1 && $control=="admin"){
    header("Location: /School-Management-System/module/admin");
}
else if($count==1 && $control=="teacher"){
   header("Location:../module/teacher");
}

else if($count==1 && $control=="student"){
    header("Location:../module/student");
}
else if($count==1 && $control=="staff"){
    header("Location:../module/staff");
}
else if($count==1 && $control=="parent"){ 
    header("Location:../module/parent");
}else{
	//header("location:../index.php");
}

?>
