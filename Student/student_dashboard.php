<?php
//session file that contains stdent session and header property is called
session_start();
if(empty($_SESSION['sess_login']) || $_SESSION['sess_login'] == ''){
    header("Location:../index.php");
    die();
}
?>


<?php
// student sidebar is declared
  require'student_sidebar.php';
 session_start();
?>
<!DOCTYPE html>
<html>
<!-- header part start -->
<head>
	<!-- title of a page -->
	<title>student_dashboard</title>
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
<header class="header">
			
	

		<!-- div is declared inside the header with name header_container -->
		<div class="header_container">
			<!-- further div for the content of header -->
			<div class="container">
				<!-- div for the row of header -->
				<div class="row">
					<!-- div for the column of header -->
					<div class="col">
						<!-- header div for storing value inside the header surrounded margin -->
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<!-- header div for adding logo inside and style is used to maintain diffenret css file to adjust logo -->
							<div class="logo_container">
								<img src="logo.BMP" style="margin-left:-100px;">
								<!-- div inside header is useld to change the style of university name where the letter W is span from the  word woodland university-->
									<div class="logo_text">W<span>OODLAND<br>UNIVERSITY</span></div>
								
							</div>
							<?php
							// if session is started then display the user name and defualt profile picture
							if(isset($_SESSION['sess_login'])){
      ?>
        <nav>
          <ul>
          	<div class="profile_logo" style="margin-left: 940px;  margin-top: 10px;">
          		<!-- when log out button is pressed link to the log out.php file for log off user -->
          	  <li><a href="../logout.php">LOGOUT</a></li>
          	  <!-- when default profile picture is pressed display the profile detail of the user using session -->
            <a href="profile.php"> <img src="profile.jpg" name="profile" style="width: 40px; 
border-radius: 5px; 
 margin-top: 10%;"></a></div>
 <!--display username with prefix Hello everytime user get log in  -->
 <div class="username" style="margin-left: 700px; font-size: 20px; margin-top: -30px;color: black;">
            <?php
            echo "hello ". $_SESSION['sess_login'] ;
            
            ?>

 </div>
          </ul>
        </nav>
      <?php
    }
 ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header is closed -->
			
	</header>

	<!-- section part is started -->
	<section>

			
		<!-- main part is started inside section part -->
		<main>

	        <!-- form is closed -->
        </form>
        <!-- div is closed  -->
      </div>
     
<div>
	 <!-- new div is made named as courses -->
			<div class="courses">
				<!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing -->
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed;"></div>
		</div>

		<div class="total_module">
			<div class="note">
  <h4 style="margin-left: 0%; background: #85B5AD ">MODULE:</h4>
  </div>	

                    	<?php
 // database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
 // statement of table column is selected from module assign
 $stmt = $pdo->prepare("SELECT module_name,module_id FROM module_assign");
  // statement is executed.
 $stmt->execute();
  // for each condition is used for decalring statement as row
 foreach ($stmt as $row) {?>
	
<h4><a href="view_upload_module.php?module_id=<?php echo $row['module_id']; ?>"><?php echo $row['module_name']?></a></h4><br><?php 
}
?>




                    	
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
	.profile_logo{
width: 20px; 
border-radius: 5px; 
margin-left: 600%;
 margin-top: 15%;
	}

.total_module{
	margin-left: 30%;
	background: white;
	width: 50%;
}
</style>






