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
			<!-- admin sidebar that contain the side bar with mentioning the criteria or job for admin pages -->
	      <?php require 'admin_sidebar.php';
	       ?>
	       <!-- new div is made named as course -->
			<div class="courses">
				<!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing -->
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed; "></div>
        <!-- new div is made named as add course -->
		<div class="add_course">
			<form class="add_course_form" method="POST" action="">
				<!-- new div is made named as add course pannel -->
				<div class="add_course_pannel">
					<label>UPDATE MODULE</label><br>
<?php 
// database name group_project is connected using pdo connnection
$pdo = new PDO('mysql:dbname=group_project;host=localhost','root','');
if(isset($_GET['id'])){
	$id=$_GET['id'];
}
if(isset($_POST['update_module'])){
	// statement of table column is selected
$stmt = $pdo->prepare("UPDATE module SET module_name=:module_name, module_full_name=:module_full_name, module_start=:module_start, module_end=:module_end, module_creation_date=:module_creation_date, course_department=:course_department WHERE id=:id");
	$criteria = [
		 'module_name' => $_POST['module_name'],
		 'module_full_name'=> $_POST['module_full_name'],
		 'module_start'=> $_POST['module_start'],
		  'module_end'=> $_POST['module_end'],
		 'module_creation_date' =>  $_POST['module_creation_date'],
		 'course_department'=> $_POST['course_department'],
		 'id'=>$id 
	];
		// statement execute the above criteria
	if($stmt->execute($criteria)){
        ?>
         <strong>Updated successfully.</strong>
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
					<input id="module_name" type="text" name="module_name" placeholder="enter name of a course" required><br><br>
					<label>MODULE FULL NAME:</label>
					<input id="module_full_name"  type="text" name="module_full_name" placeholder="enter name of a course" required><br><br>
                    <label>MODULE SESSION START:</label>
                    <input id="module_start"  type="date" name="module_start" placeholder="enter name of a course" required><br><br>
                    <label>MODULE SESSION END:</label>
                    <input id="module_end"  type="date" name="module_end" placeholder="enter name of a course" required><br><br>
                    <label>MODULE CREATION DATE:</label>
                    <input id="module_creation_date" type="date" name="module_creation_date" required><br><br>
                    <label>COURSE DEPARTMENT:</label>
                    <select id="course_department" name="course_department">
 <?php

 
  // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
 // statement of table column is selected from courses
 $stmt = $pdo->prepare("SELECT course_full_name FROM course");
  // statement is executed.
 $stmt->execute();
  // for each condition is used for declaring statement as row.
 foreach ($stmt as $row) {
 echo '<option course_full_name="'.$row['course_full_name'].'">'.$row['course_full_name'].' course</option>';
}
?>

                    	
            </select>
			 <input class="btn_course" type="submit" name="update_module" value="UPDATE MODULE"><br>
			</form>


			 
		</div>
		<!-- div is closed -->
  <!--   main is closed -->
		</main>
		<!-- section part is closed -->
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
	background:#e7e7e7;  /*background color is set*/
    color: black;     /*color */
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