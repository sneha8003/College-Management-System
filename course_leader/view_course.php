<?php
//session file that contains admin session and header property is called
include 'session.php';
?>
<!DOCTYPE html>
<html>
<!-- header part start -->
<head>
  <!-- title of a page -->
	<title>view_notification</title>
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
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed;">
	 <div class="notification" >
	 	<div class="note">
  <h4 style="margin-left: 3%;">COURSE ASSIGN:</h4>
  </div>
  <?php 
// course table_generator is declared
 require 'course_table_generator.php';
 // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
  // table generator is declared.
 $tg = new TableGenerator();
  // heading for different column is set.
 $tg->setHeadings(['id','course_name','course_full_name','course_leader','course_creation_date']);
  // statement of table column is selected from course table.
 $stmt = $pdo->prepare("SELECT id,course_name, course_full_name, course_leader_name,course_creation_date FROM course");
  // statement is executed.
 $stmt->execute();
  // for each condition is used for decalring statement as row.
 foreach ($stmt as $row) {
   $tg->addRow($row);
  
 }
 echo $tg->getHTML();
?>
</div>
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
 background-color: grey;   /*background color is set*/
  margin-top: 8%;
  margin-left: 33%;
  width: 50%;
  height: 40%;
  position: fixed;
  padding: 2px;
  background: white;
  overflow-x: auto;
  overflow-y: auto;
}
.note {
 color: black;   /*color */
 background: #e7e7e7;
}

</style>	



