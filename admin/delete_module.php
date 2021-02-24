<?php
//session file that contains admin session and header property is called
include 'session.php';
?>
<!DOCTYPE html>
<html>
<!-- heaeder part start -->
<head>
  <!-- title of a page -->
	<title>view_notification</title>
  <!-- bootstrap.mi.css style file is called -->
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
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed;"></div>
    <!-- new div is made -->
	 <div class="notification" >
   <!--  new div is made -->
	 	<div class="note">
  <h4 style="margin-left: 3%;">COURSE:</h4>
  </div>
<?php
// database name group_project is connected using pdo connnection
$pdo = new PDO('mysql:dbname=Group_Project; host=localhost','root','');
if(isset($_GET['delete']))
// delete column using id.
{
  // delete column from course taking reference id
	$stmt = 'DELETE FROM course WHERE id = :id';
// statement is called from above stmt to prepared stmt using pdo on varaiable $preparedstmt
	$preparedstmt = $pdo->prepare($stmt);
	$criteria = [
		'id' =>$_GET['delete']
	];
// prepared stmt is execute with criteria and display deleted statement if the criteria get executed using strong
	if($preparedstmt->execute($criteria))  {
        ?>
                   <strong>Deleted successfully.Pree Ok!! <button> <a href="delete_module.php">OK</a></button></strong>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("Registration Error");
            </script>
          <?php

        }

}
?>
 <?php 
//course_table_generator is declared
 require 'course_table_generator.php';
  // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
  // table generator is declared.
 $tg = new TableGenerator();
// heading for different column is set.
 $tg->setHeadings(['id','module_name','module_full_name','module_start','module_end','module_creation_date','course_department']);
 // statement of table column is selected from module
  $stmt = $pdo->prepare("SELECT * FROM module");
  // statement is executed.
 $stmt->execute();
  // for each condition is used for declaring statement as row.
 foreach ($stmt as $row) {
   $tg->addRow($row);
  
 }
 echo $tg->getHTML();
?>
</div>
		</div>	 
		<!-- div is closed -->
<!--     main is closed
 -->    		
</main>
<!-- section  is closed -->
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
 background-color: grey;  /*background color is set*/
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
 color: black;    /*color */ 
 background: #e7e7e7;
}

</style>	



