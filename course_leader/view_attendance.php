<?php
//session file that contains admin session and header property is called
include 'session.php';
?>
<!DOCTYPE html>
<html>
<!-- header part start -->
<head>
	<!-- title of a page -->
	<title>view_attendance</title>
	<!-- bootstrap.min.css style file is called -->
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css"> 
<!-- responsive.css is used to make system responsive -->
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<!-- header part ends -->
<!-- body part started -->
<body>
<!-- section part is started -->
	<section>

			
		<!-- main part is started inside section part -->
		<main>
			  <!-- course_leader sidebar that contain the side bar with mentioning the criteria or job for course leader pages -->
				<?php require 'course_leader_sidebar.php';
	       ?>
	       
             <!-- new div is made named as courses -->
			<div class="courses">
				<!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing -->
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed;"></div>
	 <div class="notification" >
	 	<div class="note">
  <h4 style="margin-left: 3%;">ATTENDANCE:</h4>
  </div>
  <?php
  // database name group_project is connected using pdo connnection
$pdo = new PDO('mysql:dbname=group_project;host=localhost', 'root', '');
// statement of table column is selected from attendance table.
$users = $pdo->prepare("SELECT * FROM attendance");
// statement is executed.
$users->execute();
?>

<?php
//starting of php
foreach ($users as $row) {?>
	<div class="about_module">
<h4><?php echo"WEEEK ".$row['week']?></h4><br></div>
<h4><?php echo $row['attendance_creation_date']?></h4><br>
<h4><?php echo $row['module_name']?></h4><br>
<a type="file" href="../module_leader/attendance_file/<?php echo $row['attendance']?>"><?php echo $row['attendance']?></a><br>
<h4 style="text-align: center;"><?php echo $row['class']?></h4></div><br>
<?php 
}
?>
</div>
<!-- div is closed -->
		</div>	 
		<!-- main is closed -->
		</main>
	</section>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/custom.js"></script>	
</body>
</html>

<!-- style css that is used to design the above page content -->
<style>
.notification{
  margin-top: 2%;
  margin-left: 20%;
  width: 80%;
  height: 40%;
  position: fixed;
  padding: 2px;
  background: white;
  overflow-x: auto;
  overflow-y: auto;
  color: black;
}
.note {
 color: black;  /*color */
 background: #e7e7e7;
}
.about_module{
	background: #85B5AD;  /*background color is set*/
}

</style>	











































