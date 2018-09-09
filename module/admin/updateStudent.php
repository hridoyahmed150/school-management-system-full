<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchForUpdateStudent.js"></script>
		</head>
    <body>
			  <div class="header"><h1>School Management System</h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
				<ul>
				    <li class="manulist">
						    <a class ="menulista" href="index.php">Home</a>
								<a class ="menulista" href="manageStudent.php">Manage Student</a>
								<a class ="menulista" href="index.php">Manage Teacher</a>
								<a class ="menulista" href="index.php">Manage Parent</a>
								<a class ="menulista" href="index.php">Manage Staff</a>
								<a class ="menulista" href="index.php">Course</a>
								<a class ="menulista" href="index.php">Attendance</a>
								<a class ="menulista" href="index.php">Exam Schedule</a>
								<a class ="menulista" href="index.php">Salary</a>
								<a class ="menulista" href="index.php">Report</a>
								<a class ="menulista" href="index.php">Payment</a>
								<div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								<a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						</li>
				</ul>
			  <hr/>
        <center>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getStudentForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Only One Student Can Update in a time.</h2>
            <form action="#" method="post" onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                <table border="1" cellpadding="6" id='updateStudentData'>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $stuId = $_POST['id'];
    $stuName = $_POST['name'];
    $stuPassword = $_POST['password'];
    $stuPhone = $_POST['phone'];
    $stuEmail = $_POST['email'];
    $stugender = $_POST['gender'];
    $stuDOB = $_POST['dob'];
    $stuAddmissionDate = $_POST['addmissiondate'];
    $stuAddress = $_POST['address'];
    $stuParentId = $_POST['parentid'];
    $stuClassId = $_POST['classid'];
    $image = $_POST['pic'];
    $uploads_dir = "../images/student";
    move_uploaded_file($image, "$uploads_dir/$image");
    $sql = "UPDATE students SET id='$stuId', name='$stuName', password='$stuPassword', phone='$stuPhone', email='$stuEmail', sex='$stugender', dob='$stuDOB', addmissiondate='$stuAddmissionDate', address='$stuAddress', parrentid='$stuParentId', classid='$stuClassId' WHERE id='$stuId'";
    $success = mysqli_query( $link,$sql );
    if(!$success) {
        die('Could not Update data: '.mysqli_error());
    }
    echo "Update data successfully\n";
}
?>
