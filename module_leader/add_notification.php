<?php
//session file that contains module leader session and header property is called
include 'session.php';
?>
<!DOCTYPE html>
<html>
<!-- header part start -->
<head>
	<!-- title of a page -->
	<title>add_course</title>
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
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8"></div>

		<div class="add_course">
			<form class="add_course_form" method="POST" action="">
				<div class="add_course_pannel">
					<label>ADD NOTIFICATION</label><br>
<?php 
// database name group_project is connected using pdo connnection.
$pdo = new PDO('mysql:dbname=group_project;host=localhost','root','');
if(isset($_POST['notification'])){
$stmt = $pdo->prepare("INSERT INTO notification(
 		message,fname,lname,u_date) VALUES(:message,:fname,:lname,:u_date)");

	$criteria = [
		 'message' => $_POST['message'],
		 'fname'=> $_POST['fname'],
		 'lname'=> $_POST['lname'],
		 'u_date' =>  $_POST['u_date']
		];
 // statement is executed.
		if($stmt->execute($criteria)){
	 ?>
   <strong>Added successfully.Pree Ok!! <button> <a href="add_notification.php">Add</a></button></strong>
    
<?php
  }
	else{
		echo '<p>!error!</p>';
	}
}

?>
				</div>
					<LABEL>MESSEGE:</LABEL>
					<input id="add_course_name" type="text" name="message" placeholder="enter name of a course" required><br><br>
					<label>FIRST NAME:</label>
					<input id="add_course_full_name"  type="text" name="fname" placeholder="enter name of a course" required><br><br>
                    <label>LAST NAME:</label>
                    <input id="add_course_leader"  type="text" name="lname" placeholder="enter name of a course" required><br><br>
                    <label>NOTIFICATION CREATION DATE:</label>
                    <input id="add_creation_date" type="date" name="u_date" required><br><br>
			 <input class="btn_course" type="submit" name="notification" value="ADD NOTIFICATION"><br>
			</form>


			<!-- div is closed  --> 
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





<style>
.add_course_pannel{
	background:#e7e7e7;   /*background color is set*/
    color: black;   /*color */
}
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
background-color: #14bdee;
  width: 100px;
  height: 30px;
  margin-top: 1%;
  margin-left: 50%;
  text-align: center;
  box-shadow: 0px 5px 40px rgba(29,34,47,0.15);
  /*box part is shadow with rgba property color */
}
.btn_course:hover{
  box-shadow: 0px 5px 40px rgba(29,34,47,0.45);
   /*hover is set to perform action when cursor meet button surface*/

}
.btn_course a{
   display: block;
  text-transform: uppercase;
}

</style>	








