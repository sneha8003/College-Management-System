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
  <!-- bootstrap.mi.css style file is callled -->
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css"> 
<!-- responsive.css is used to make system responsive -->
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/style.css">
<!-- header part ends -->
</head>
<!-- body part started -->
<body>


<!-- section part is started -->
	<section>

			
		<!-- main part is started inside section part -->
		<main>
      <!-- admin sidebar that contain the side bar with mentioning the criteria or job for admin pages -->
				<?php require 'admin_sidebar.php';
	       ?>
         <!-- new div is made named as searcf form -->
	       <div class="search_form">
        <form method="POST" action="ajaxProducts.php" enctype="multipart/form-data">
           <input type="text" id="keyword" placeholder="search for a name"/>
           <!-- new div is created -->
          <div id="content"></div>
        </form>
      </div>
      <div>

        <a href="admin_homepage.php">Back</a>
      </div>
<div>
  <!-- new div is created of courses -->
			<div class="courses">
        <!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing -->
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8" style="height: 100%; position: fixed;"></div>

		<div class="view_users">
	
	 <?php 

// archive_tablegenerator is declared.
 require 'archive_tableGenerator.php';
// database name group_project is connected using pdo connnection
 $pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');
  // table generator is declared.
 $tg = new TableGenerator();
 $tg->setHeadings(['id','f_name','l_name','username','address','nationality','dob','gender','p_challenged','contact_number','email','user_type']);
  // statement of table column is selected from table_user table.
 $stmt1 = $pdo->prepare("SELECT id,f_name,l_name,username,address,nationality,dob,gender,p_challenged,contact_number,email,user_type FROM tbl_user where archive='yes'");
  // statement is executed.
 $stmt1->execute();
  
 $count=0;
 // for each condition is used for decalring statement as row.
 foreach ($stmt1 as $row) {
   $tg->addRow($row);
  
} 
echo $tg->getHTML();
?>
		</div>
     <!--div is closed  -->	 
		</div>
    <!-- main part is closed -->
		</main>
    <!-- section part is closed -->
	</section>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/custom.js"></script>	
</body>
</html>





<style>
.add_user_pannel{
	background:#e7e7e7;    /* background color is set*/ 
    color: black;
}
.add_user_form{
	margin: 5px;
	padding: 2px;
	width: 65%;
	margin-left: 27%;
	margin-top: 5%;
	height: 50%;
	background: white;
	border-radius: 4px;
}
#firstname{
	margin-left: 3px; 
    width: 30%;
    border-radius: 2px;
    padding: 2px;
}
#dob{
	margin-left: 3px; 
    width: 30%;
    border-radius:2px;
    padding: 2px;
}
#lastname{
	margin-left: 6px; 
    width: 30%;
    border-radius: 2px;
    padding: 2px;
}
#password{
	margin-left: 8px; 
    width: 30%;
    border-radius: 2px;
    padding: 2px;
}
#Nationality{
	margin-left: 13px; 
    width: 30%;
    border-radius: 2px;
    padding: 2px;
}
#address{
	margin-left: 25px; 
    width: 30%;
    border-radius: 2px;
    padding: 2px;
}
#contact_number{
	margin-left: 2px; 
    width: 30%;
    border-radius: 2px;
    padding: 2px;
}
#email{
	margin-left: 2px; 
    width: 30%;
    border-radius: 2px;
    padding: 2px;
}
#user_type{
    margin-left: 2px; 
    border-radius: 2px;
    padding: 2px;
}
#gender{
	margin: 3px;
}
#physically_challenged{
	margin: 3px;
}


.btn_user{
background-color: #14bdee;    /* background color is set*/ 
  width: 100px;
  height: 30px;
  margin-top: 1%;
  margin-left: 45%;
  text-align: center;
  box-shadow: 0px 5px 40px rgba(29,34,47,0.15);
  /*box part is shadow with rgba property color */
}
.btn_user:hover{
  box-shadow: 0px 5px 40px rgba(29,34,47,0.45);     /*hover is set to perform action when cursor meet button surface*/ 

}
.btn_user a{
   display: block;
  text-transform: uppercase;
}
.view_users{
width: 80%;
margin-left: 19%;
}
</style>	



























