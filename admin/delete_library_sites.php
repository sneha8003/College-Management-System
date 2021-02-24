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
  <!-- bootstrap.mi.css style file is callled -->
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
				<?php require 'admin_sidebar.php';
	       ?>
	       
<!-- new div is made named as course -->
			<div class="courses">
<!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing --> 
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed;"></div>
    <!-- new div is made -->
	 <div class="notification" >
    <!-- new div is made -->
	 	<div class="note">
  <h4 style="margin-left: 3%;">NOTIFICATION:</h4>
  </div>
<?php
// database name group_project is connected using pdo connnection
$pdo = new PDO('mysql:dbname=Group_Project; host=localhost','root','');
if(isset($_GET['delete']))
// delete column using id.
{
  // delete column from course taking reference id
	$stmt = 'DELETE FROM library_sites WHERE id = :id';
// statement is called from above stmt to prepared stmt using pdo on varailable $preparedstmt
	$preparedstmt = $pdo->prepare($stmt);
	$criteria = [
		'id' =>$_GET['delete']
	];
// prepared stmt is execute with criteria and display deleted statement if the criteria get executed using strong
	if($preparedstmt->execute($criteria))  {
        ?>
                   <strong>Deleted successfully.Pree Ok!! <button> <a href="view_library_sites.php">OK</a></button></strong>
        <?php
        }
        else
        {

          ?>
          <!-- javascript is used -->
            <script type="text/javascript">
              alert("Registration Error");
            </script>
          <?php

        }

}
?>
  <?php 
//library_tableGenerator is declared
 require 'library_tableGenerator.php';
 // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
  // table generator is declared.
 $tg = new TableGenerator();
 // heading for different column is set.
 $tg->setHeadings(['id','link','Date']);
  // statement of table column is selected from library sites
 $stmt = $pdo->prepare("SELECT id,link,u_date FROM library_sites");
 // statement is executed.
 $stmt->execute();
  // for each condition is used for declaring statement as row.
 foreach ($stmt as $row) {
   $tg->addRow($row);
  
 }
 echo $tg->getHTML();
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



