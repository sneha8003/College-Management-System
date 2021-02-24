<?php
//session file is started
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- header part start -->
<head>
  <!-- title of a page -->
<title>WOODLAND UNIVERSITY</title>
<!-- bootstrap.min.css style file is called -->
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css"> 
<!-- responsive.css is used to make system responsive --> 
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<!-- head part ends -->
<!-- body part started -->
<body>

<div class="super_container">

	

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
              <!-- div inside header is useld to change the style of university name where the letter W is span from the  word woodland university-->
									<div class="logo_text">
             <img src="logo.BMP" style="margin-left:-100px; position: fixed;">
                    W<span>OODLAND<br>UNIVERSITY</span></div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
     <!--  div is closed -->
		</div>

	
			<!-- header is closed -->
	</header>

	
<!-- section is started -->
	<section>	
	<main>

	
<!-- new div is made named as courses -->
	<div class="courses">
    <!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing -->
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="login">
     <?php
// database name group_project is connected using pdo connnection
$pdo = new PDO('mysql:dbname=wood;host=localhost', 'root', 'root');
  // it is used to check the statement whether the log in is post or not.
if (isset($_POST['login'])) {
    // selecting username from tbl_user
  $stmt= $pdo->prepare("SELECT * FROM tbl_user WHERE username= :username");
  $criteria=[
    'username' => $_POST['username']

  ];
// statement is executed
  $stmt-> execute($criteria);
  //to check if statement is used to check the password is added or not
  if($stmt-> rowCount() >0){
    $user = $stmt -> fetch();
    //to check if the password is verified or not. 
    if(password_verify($_POST['password'],$user['password'])){
      echo "Wrong details";
      // to check weather log in is admin or user type.
     $_SESSION['sess_login']=$_POST['username'];
      if ($user['user_type']=='admin'){
       header('Location:admin/admin_dashboard.php');
      }
    else if ($user['user_type']=='student') {
          $_SESSION['sess_login'] = $_POST['username'];
        header('Location:student/student_dashboard.php');
      }
      else if ($user['user_type']=='course_leader')
        {
            $_SESSION['sess_login'] = $_POST['username'];
          header('Location:course_leader/course_leader_dashboard.php');
    } 
      else if ($user['user_type']=='Module_leader')
      { 
         $_SESSION['sess_login'] = $_POST['username'];
         header('Location:module_leader/module_leader_dashboard.php');
      }
      else 
      {
        echo "user_type error";
      }
    }
    else echo '<h2>!!Login Failed!!</h2>';
  }
}
?>

<div class="help_sites">
 <div class="notification" >
    <div class="note">
  <h4 style="margin-left: 3%;">HELP SITES:</h4>
  </div>
   <?php
   // database name group_project is connected using pdo connnection
$pdo = new PDO('mysql:dbname=wood;host=localhost', 'root', 'root');
$users = $pdo->prepare("SELECT * FROM library_sites");
//statement is executed
$users->execute();
?>

<?php
foreach ($users as $row) {?>
  <div class="about_module">
<h4>LINK:</h4><br></div>
<h4 style="text-align: center;"><?php echo $row['link']?></h1><br>
<a type="text" href="<?php echo $row['link']?>"><?php echo $row['link']?></a><br>
<h4><?php echo $row['u_date']?></h4><br>
<?php 
}
?>
</div>
<!-- div is closed -->
</div>

<!-- form is made -->
  <form method="POST" action="">
    <h4 id="lgn">Log In</h4>
  <label>Username:</label><input id="username" type="text" name="username" placeholder="Enter your username" required><br><br>
  <label>Password:</label><input id="password" type="password" name="password" placeholder="Enter your password" required ><br>
  <input class="btn_lgn" type="submit" name="login" value="LOGIN"><br>
</form>
</div>

<div class="needhelp">
  <h4>FeedBack?</h4>
  <?php 

if(isset($_POST['submit'])){
  $stmt = $pdo->prepare("INSERT INTO feed_back(
    feedback) VALUES(:feedback)");

  $criteria = [
     'feedback' => $_POST['feedback']
    ];

  if($stmt->execute($criteria)){
   ?>
   <strong>Added successfully.Pree Ok!! <button class="btn"> <a href="index.php">OK</a></button></strong>
    
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
 <!-- form is made -->
 <form method="POST" action="">
   <input id="feedback_form" type="text" name="feedback" placeholder="write something..."><br>
   <input class="btn" type="submit" name="submit" value="feedback" style="width: 90px; height: 25px; margin-top: 5%; margin-left: 5%;">
   <!-- form is closed -->
 </form>
 <!-- div is closed -->
</div>
<!-- main is closed -->
</main>
<!-- section is closed -->
</section>

	

<script src="js/jquery-3.2.1.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>


<!-- style css that is used to design the above page content -->
<style>
.notification{
 background-color: grey;  /*background color is set*/
  margin-top: -1%;
  margin-left: 60%;
  width: 40%;
  height: 80%;
  position: fixed;
  padding: 2px;
  background: white;
  overflow-x: auto;
  overflow-y: auto;
}
.help_sites{
  background: white;
  width: 40%;
  position: fixed;
}
.note {
 color: black;
 background: #e7e7e7;
}
.about_module{
  background: #85B5AD;
}
.needhelp{
  
  margin-left: 2%;
  margin-top: 6%;
  padding: 1%;
  background: white;
  width: 25%;
  height: 25%;
  box-shadow: 0px 1px 10px rgba(29,34,47,0.1);
  /*box part is shadow with rgba property color */
}


</style>