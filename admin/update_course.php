<?php
//session file that contains admin session and header property is called
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
			<!-- admin sidebar that contain the side bar with mentioning the criteria or job for admin pages -->
	      <?php require 'admin_sidebar.php';
	       ?>
	       <!-- new div is made named as courses -->
			<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed; "></div>
        <!-- new div is made named as add course -->
		<div class="add_course">
			<form class="add_course_form" method="POST" action="">
				<!-- new div is made named as add course pannel -->
				<div class="add_course_pannel">
					<label>UPDATE COURSE</label><br>
<?php 
// database name group_project is connected using pdo connnection
$pdo = new PDO('mysql:dbname=group_project;host=localhost','root','');
if(isset($_POST['update'])){
	// statement of table column is selected from course
$stmt = $pdo->prepare("UPDATE course SET course_name=:course_name, course_full_name=:course_full_name,course_leader_name=:course_leader_name, course_creation_date=:course_creation_date WHERE id=:id");
	$criteria = [
		'course_name' => $_POST['course_name'],
		'course_full_name'=> $_POST['course_full_name'],
		'course_leader_name'=> $_POST['course_leader_name'],
		'course_creation_date'=>$_POST['course_creation_date'],
		'id'=>$_GET['id'] 
		
	];
		// statement execute the above criteria
	if($stmt->execute($criteria))  {
        ?>
         <strong>Updated successfully.Press Ok!! <button> <a href="update_course.php">OK</a></button></strong>
        <?php
        }
        else
        {

          ?>
          <!-- using javascript -->
            <script type="text/javascript">
              alert("Registration Error");
            </script>
          <?php

        }
}
?>

				</div>
					<LABEL>COURSE SHORT NAME:</LABEL>
					<input id="add_course_name" type="text" name="course_name" placeholder="enter name of a course" required><br><br>
					<label>COURSE FULL NAME:</label>
					<input id="add_course_full_name"  type="text" name="course_full_name" placeholder="enter name of a course" required><br><br>
                    <label>COURSE LEADER NAME:</label>
                    <input id="add_course_leader"  type="text" name="course_leader_name" placeholder="enter name of a course" required><br><br>
                    <label>COURSE CREATION DATE:</label>
                    <input id="add_creation_date" type="date" name="course_creation_date" required><br><br>
			 <input class="btn_course" type="submit" name="update" value="UPDATE"><br>
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




<!-- style css that is used to design the above page content -->
<style>
.add_course_pannel{
	background:#e7e7e7;  /*background color is set*/
    color: black;  /*color */
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






<!-- value="<?php echo date('y-m-d');?>" readonly="readonly" -->












/*<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_dropdown -->*/