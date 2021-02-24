<?php
//session file that contains admin session and header property is called
include 'session.php';
?>
<!DOCTYPE html>
<html>
<!-- header part start -->
<head>
	<!-- title of a page -->
	<title>assign_module</title>
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
			<!-- course leader sidebar that contain the side bar with mentioning the criteria-->
	       <?php require 'course_leader_sidebar.php';
	       ?> 	
                 <!-- new div is made named as courses -->
	       		<div class="courses">
	       			<!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing -->
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="position: fixed; height: 100%"></div>
         <!-- new div is made named as add course -->
		<div class="add_course">
			<form class="add_course_form" method="POST" action="">
				<div class="add_course_pannel">
					<label>ASSIGN MODULE</label><br>
					<?php 
// database name group_project is connected using pdo connnection					
$pdo = new PDO('mysql:dbname=group_project;host=localhost','root','');
if(isset($_POST['module'])){
	// statement of table column is selected from module
$stmt = $pdo->prepare("INSERT INTO module_assign(
 		module_name,module_creation_date,module_leader) VALUES(:module_name,:module_creation_date,:module_leader)");
  $criteria = [
		 'module_name' => $_POST['module_name'],
		 'module_creation_date' =>  $_POST['module_creation_date'],
		 'module_leader'=> $_POST['module_leader']
		];
		// statement execute the above criteria
		if($stmt->execute($criteria)){
	 ?>
   <strong>Added successfully.Pree Ok!! <button> <a href="assign_module.php">OK</a></button></strong>
    
<?php
  }
	else{
		echo '<p>!error!</p>';
	}
}

?>
				</div>
					<LABEL>MODULE NAME:</LABEL>
					<select id="module_name" name="module_name">
                    	<?php

 
 // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
 $stmt = $pdo->prepare("SELECT module_name FROM module");
  // statement is executed.
 $stmt->execute();
  // for each condition is used for decalring statement as row.
 foreach ($stmt as $row) {
 echo '<option module_name="'.$row['module_name'].'">'.$row['module_name'].' </option>';
}
?>
 </select><br><br>
					
                    <label>MODULE CREATION DATE:</label>
                    <input id="module_creation_date" type="date" name="module_creation_date" required><br><br>
                    <label>MODULE LEADER:</label>
                    <select id="module_leader" name="module_leader">
                    	<?php

 
 // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
 $stmt = $pdo->prepare("SELECT username FROM tbl_user WHERE user_type='module_leader'");
  // statement is executed.
 $stmt->execute();
  // for each condition is used for decalring statement as row.
 foreach ($stmt as $row) {
 echo '<option module_leader="'.$row['username'].'">'.$row['username'].' </option>';
}
?>


                    	
            </select>

			 <input class="btn_course" type="submit" name="module" value="ADD MODULE"><br>
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

#module_creation_date{
margin-left: 20px;
width: 40%;
border-radius: 2px;
}
#module_leader{
	margin-left: 72px;
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