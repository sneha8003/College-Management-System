<?php
//session file that contains admin session and header property is called
include 'session.php';
?>
<!DOCTYPE html>
<html>
<!-- heaeder part start -->
<head>
	<!-- title of a page -->
	<title>update_module</title>
	<!-- bootstrap.min.css style file is called -->
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css"> 
<!-- responsive.css is used to make system responsive -->
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<!-- head part ends -->
<!-- body part started -->
<body>
<!-- section part is started -->
	<section>

			
		<!-- main part is started inside section part -->
		<main>
			<!-- course leader sidebar that contain the side bar with mentioning the criteria or job for course leader pages -->
	      <?php require 'course_leader_sidebar.php';
	       ?>
	       <!-- new div is made named as course -->
			<div class="courses">
				<!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing --> 
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed; "></div>

		<div class="add_course">
			<form class="add_course_form" method="POST" action="">
				<div class="add_course_pannel">
					<label>UPDATE MODULE</label><br>
<?php 
// database name group_project is connected using pdo connnection
$pdo = new PDO('mysql:dbname=group_project;host=localhost','root','');
if(isset($_GET['id'])){
	$module_id=$_GET['id'];
}
if(isset($_POST['update_module'])){
	// statement of table column is selected from module assign
$stmt = $pdo->prepare("UPDATE module_assign SET module_name=:module_name, module_creation_date=:module_creation_date, module_leader=:module_leader WHERE module_id=:module_id");
	 $criteria = [
		 'module_name' => $_POST['module_name'],
		 'module_creation_date' =>  $_POST['module_creation_date'],
		 'module_leader'=> $_POST['module_leader'],
		  'module_id'=>$module_id 
		];
		// statement execute the above criteria
	if($stmt->execute($criteria)){
        ?>
         <strong>Updated successfully.Pree Ok!! </a></button></strong>
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
					<LABEL>MODULE NAME:</LABEL>
					<select id="module_name" name="module_name">
<?php
 
// database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
 // statement of table column is selected from module
 $stmt = $pdo->prepare("SELECT module_name FROM module");
  // statement is executed.
 $stmt->execute();
  // for each condition is used for declaring statement as row.
 foreach ($stmt as $row) {
 echo '<option module_name="'.$row['module_name'].'">'.$row['module_name'].' </option>';
}
?>
 </select><br><br>
					<!-- label is made for module creation date and module leader -->
                    <label>MODULE CREATION DATE:</label>
                    <input id="module_creation_date" type="date" name="module_creation_date" required><br><br>
                    <label>MODULE LEADER:</label>
                    <select id="module_leader" name="module_leader">
                    	<?php

 
 // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
 // statement of table column is selected from tbl_user
 $stmt = $pdo->prepare("SELECT username FROM tbl_user WHERE user_type='module_leader'");
  // statement is executed.
 $stmt->execute();
  // for each condition is used for decalring statement as row.
 foreach ($stmt as $row) {
 echo '<option module_leader="'.$row['username'].'">'.$row['username'].' </option>';
}
?>


                    	
            </select></br></br>

			 <input class="btn_course" type="submit" name="update_module" value="UPDATE MODULE"><br>
			</form>

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
.add_course_pannel{
	background:#e7e7e7;    /*background color is set*/
    color: black;    /*color */
}
.add_course_form{
	margin: 5px;
	padding: 2px;
	width: 50%;
	margin-left: 35%;
	margin-top: 5%;
	height: 53%;
	background: white;
	border-radius: 4px;
}
#module_name{
	margin-left: 80px; 
    width: 40%;
    border-radius: 2px;
}
#module_full_name{
   margin-left: 45px;
   width: 40%;
   border-radius: 2px;
}
#module_start{
  margin-left: 22px;
  width: 40%;
  border-radius: 2px;
}
#module_end{
margin-left: 35px;
width: 40%;
border-radius: 2px;
}
#module_creation_date{
margin-left: 20px;
width: 40%;
border-radius: 2px;
}
#course_department{
	margin-left: 33px;
width: 40%;
border-radius: 2px;
}
.btn_course{
background-color: #14bdee;
  width: 130px;
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