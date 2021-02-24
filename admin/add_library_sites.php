 <?php
//session file that contains admin session and header property is called
include 'session.php';
?>
<!DOCTYPE html>
<html>
<!-- heaeder part start -->
<head>
		<!-- title of a page -->
	<title>add_course</title>
		<!-- bootstrap.mi.css style file is callled -->
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
			<!-- admin sidebar that contain the side bar with mentioning the criteria or job for admin pages -->
				<?php require 'admin_sidebar.php';
	       ?>
				<!-- new div is made named as course -->
			<div class="courses">
				<!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing -->
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="position: fixed; height: 100%;"></div>

		<div class="add_course">
			<!-- create a new form to add course for university by admin -->
			<form class="add_course_form" method="POST" action="">
				<div class="add_course_pannel">
					<label>ADD LIBRARY</label><br>
					 <?php 
					 // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project;host=localhost','root','');
// every time when action button is pressed named library_sites insert a library sites into library_sites table using if isset loop and record are stored using POST method
if(isset($_POST['library_site'])){
	// attributes of course table in database and values to be stored inside database 
 	$stmt = $pdo->prepare("INSERT INTO library_sites(
 		link,u_date) VALUES(:link,:u_date)");
// all values are posted on the attribute of course table using post method
	$criteria = [
		 'link' => $_POST['link'],
		 'u_date' =>  $_POST['u_date']
		];
		// when all values get executed then print added successfull notification and a button named OK that will redirect it further on same page add_course.

	if($stmt->execute($criteria)){
	 ?>
   <strong>Added successfully.Pree Ok!! <button> <a href="add_library_sites.php">OK</a></button></strong>
    
<?php
  }
  // when execution get failed then display notification error using echo
	else{
		echo '<p>!error!</p>';
	}
}

?>
<!-- form field -->
				</div>
					<LABEL>LINK:</LABEL>
					<input id="add_course_name" type="link" name="link" placeholder="enter link" required><br><br>
					<label>DATE:</label>
					<input id="add_course_full_name"  type="date" name="u_date"><br><br>
			 <input class="btn_course" type="submit" name="library_site" value="ADD LIBRARY"><br>
			</form>


			 
		</div>
		 <!--div is closed  -->
		</main>
			<!-- main part is closed -->
	</section>
	<!-- section part is closed -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/custom.js"></script>	
</body>
</html>





<style>
.add_course_pannel{
	background:#e7e7e7;   /* background color is set*/
    color: black;
}
.add_course_form{
	margin: 5px;
	padding: 2px;
	width: 50%;
	margin-left: 35%;
	margin-top: 5%;
	height: 50%;
	background: white;
	border-radius: 4px;
}
#add_course_name{
	margin-left: 35px; 
    width: 40%;
    border-radius: 2px;
}
#add_course_full_name{
   margin-left: 47px;
   width: 40%;
   border-radius: 2px;
}
#add_creation_date{
  margin-left: 22px;
  width: 40%;
  border-radius: 2px;
}
#add_course_leader{
margin-left: 33px;
width: 40%;
border-radius: 2px;
}

.btn_course{
background-color: #14bdee;  /*background color is set*/
  width: 100px;
  height: 30px;
  margin-top: 1%;
  margin-left: 50%;
  text-align: center;
  box-shadow: 0px 5px 40px rgba(29,34,47,0.15);  /*box part is shadow with rgba property color */
}
.btn_course:hover{
  box-shadow: 0px 5px 40px rgba(29,34,47,0.45);  /*hover is set to perform action when cursor meet button surface*/

}
.btn_course a{
   display: block;
  text-transform: uppercase;
}

</style>	


































 
