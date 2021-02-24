<?php
//session file that contains admin session and header property is called
include 'session.php';
?>
<!DOCTYPE html>
<html>
<!-- heaeder part start -->
<head>
	<!-- title of a page -->
	<title>add_user</title>
	<!-- bootstrap.mi.css style file is callled -->
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
	       <!-- new div is made named as course -->


			<div class="courses">

				<!-- new div is made that let data parrallax while scrolling page and background image of pages is defined with path name and style is used for designing -->

				
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="../images/courses_background.jpg" data-speed="0.8"></div>

		<div class="add_course">

			<!-- create a new form  -->

			<form class="add_user_form" method="POST" action="">
				<?php 

					// database name group_project is connected using pdo connnection


		$pdo = new PDO('mysql:dbname=group_project; host=localhost','root','');

// every time when action button is pressed named user insert a record into tbl_user table using if isset loop and record are stored using POST method

$error='';
if(isset($_POST['user'])){
	
		// attributes of course table in database and values to be stored inside database 

	
		$stmt = $pdo->prepare("INSERT INTO tbl_user(f_name,l_name,username,password,address,nationality,dob,gender,p_challenged,contact_number,email,user_type)
													VALUES (:f_name,:l_name,:username,:password,:dob,:nationality,:address,:gender,:p_challenged,:contact_number,:email,:user_type)");

		  // all values are posted on the attribute of course table using post method


		$criteria = [
		 'f_name' => $_POST['f_name'],
		 'l_name'=> $_POST['l_name'],
		 'username'=> $_POST['username'],
		 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
		 'address'  => $_POST['address'],
		 'nationality'=> $_POST['nationality'],
		 'dob'=> $_POST['dob'],
		 'gender' =>$_POST['gender'],
		 'p_challenged'=>$_POST['p_challenged'],
		 'contact_number'=>$_POST['contact_number'],
		 'email'=>$_POST['email'],
		 'user_type'=>$_POST['user_type']
		 
		];
		// when all values get executed then print added successfull notification and a button named OK that will redirect it further on same page add_course.
		if($stmt->execute($criteria))  {
        ?>
                   <strong>Added successfully.Pree Ok!! <button> <a href="add_user.php">OK</a></button></strong>
        <?php
        }

  // when execution get failed then display notification error using javascript


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


    <!-- form field -->
				<div class="add_user_pannel">
					<label style="color: black; font-family: bold;">ADD USERS</label><br>
					
				</div>
				<label style="color: black; font-family: bold;">PERSONAL INFORMATION</label><br>
					<LABEL>FIRST NAME:</LABEL>
					<input id="firstname" type="text" name="f_name" placeholder="enter first name.. " required>
					<label>LAST NAME:</label>
					<input id="lastname"  type="text" name="l_name" placeholder="enter last name.." required><br><br>

					<label>USER NAME:</label>
					<input id="lastname"  type="text" name="username" placeholder="enter last name.." required>
					<label>Archive</label>
					<input id="archive" type="radio" name="archive">YES
					<input id="archive" type="radio" name="archive">NO
					<br><br>
					
                    <label>PASSWORD:</label>
                    <input id="password"  type="password" name="password" placeholder="enter password.." required>
                    <label>ADDRESS:</label>
                    <input id="address"  type="text" name="address" placeholder="enter address.." required><br><br>
					
                   <label>Nationality:</label>
                    <input id="Nationality" type="text" name="nationality" placeholder="enter nationality.."required>
					<label>DATE OF BIRTH:</label>
					<input id="date_of_birth"  type="date" name="dob" placeholder="enter birth date.. " required><br><br>
                     
                     <label>GENDER:</label>
					 <input type="radio" name="gender" id="gender" value="Male">MALE
		            <input type="radio" name="gender" id="gender" value="female">FEMALE 
		            <input type="radio" name="gender" id="gender" value="other">OTHERS <br><br>

                    
                    <label>PHYSICALLY CHALANGED:</label>
                    <input id="physically_challenged"  type="radio" name="p_challenged" value="yes"  
					 required>Yes
                    <input id="physically_challenged"  type="radio" name="p_challenged" value="no" 
					required>No<br><br>

                    <div class="contact_information">
                    	<label style="color: black; font-family: bold;background-color: #e7e7e7;">CONTACT INFORMATION</label><br><br>
                    	<label>Mobile Number:</label>
                    	 <input id="contact_number" type="number" name="contact_number" placeholder="enter mobile number.." required maxlength="10">
                         <label>Email Id:</label>
                         <input id="email" type="email" name="email" placeholder="enter email.." required><br><br>
                         <select id="user_type" name="user_type">
                	<option value="admin">admin</option>
                	<option value="student">student</option>
                	<option value="course_leader">course_leader</option>
                	<option value="Module_leader">module_leader</option>
                </select><br><br>
                    </div>
			 <input class="btn_user" type="submit" name="user" value="ADD USER"><br><br>
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





<style>
.add_user_pannel{
	background:#e7e7e7;
    color: black;
}
.add_course{
	margin-top: -20px;
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
#archive{
	margin-left: 15px; 
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
background-color: #14bdee;
  width: 100px;
  height: 30px;
  margin-top: 1%;
  margin-left: 45%;
  text-align: center;
  box-shadow: 0px 5px 40px rgba(29,34,47,0.15);
}
.btn_user:hover{
  box-shadow: 0px 5px 40px rgba(29,34,47,0.45);

}
.btn_user a{
   display: block;
  text-transform: uppercase;
}
</style>	



