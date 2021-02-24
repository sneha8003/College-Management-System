<?php
//session file that contains module_leader session and header property is called
session_start();
// if session does not start or user try to redirect page without login then link the page to the index homepage
if(empty($_SESSION['sess_login']) || $_SESSION['sess_login'] == ''){
    header("Location:../index.php");
    die();
}
?>
<!DOCTYPE html>
<html>
<!-- header part start -->
<head>
	<!-- title of a page -->
	<title></title>
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
          	<div class="profile_logo" style="margin-left: 940px;">
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
</body>
</html>
	