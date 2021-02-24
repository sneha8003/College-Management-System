<?php
//session file that contains module leader session and header property is called
include 'session.php';
?>
<!DOCTYPE html>
<html>
<!-- header part start -->
<head>
	<!-- title of a page -->
	<title>view_module_uploaded</title>
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
			<!-- module_leader sidebar that contain the side bar with mentioning the criteria or job for module leader pages -->
				<?php require 'module_leader_sidebar.php';
	       ?>
	       
             <!-- new div is made named as courses -->
			<div class="courses">
				<!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing -->
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed;"></div>
	 <div class="notification" >
	 	<div class="note">
  <h4 style="margin-left: 3%;">MODULE:</h4>
  </div>
  <?php

 
  // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
 $stmt = $pdo->prepare("SELECT module_name,module_id FROM module_assign");
  // statement is executed.
 $stmt->execute();
  // for each condition is used for decalring statement as row
 foreach ($stmt as $row) {?>
	
<h4><a href="view_module.php?module_id=<?php echo $row['module_id']; ?>"><?php echo $row['module_name']?></a></h4><br><?php 
}
?>

</div>
<!-- div is closed -->
		</div>	 
			<!-- main is closed -->
		</main>
		<!-- section is closed -->
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
  height: 80%;
  position: fixed;
  padding: 2px;
  background: white;
  overflow-x: auto;
  overflow-y: auto;
  color: black;
}
.note {
 color: black;   /*color */
 background: #e7e7e7;
}
.about_module{
	background: #85B5AD;  /*background color is set*/
}

</style>	











































