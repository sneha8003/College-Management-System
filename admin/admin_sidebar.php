	<!-- this is the main side bar -->
  <div class="sidenav">
    <!-- when dashboard is clickek redirect to the page admin_dashboard.php -->
			<label><a href="admin_dashboard.php"><h3>DASHBOARD</h3></a></label>
    <!--  button of side bar -->
  <button class="drop">Course 
    <i class="fa fa-caret-down"></i>
  </button>
      <!-- drop down button in side bar -->

  <div class="dropdown">
    <a href="add_course.php">Add</a>
    <a href="view_course.php">View</a>
  </div>
      
    <!--  button of side bar -->

  <button class="drop">Notification 
    <i class="fa fa-caret-down"></i>
  </button>
      <!-- drop down button in side bar -->

  <div class="dropdown">
      
     <a href="add_notification.php">Add</a>
    <a href="view_notifcation.php">View</a>
  </div>
    <!--  button of side bar -->

  <button class="drop">Register
    <i class="fa fa-caret-down"></i>
  </button>
      <!-- drop down button in side bar -->

  <div class="dropdown">
     <a href="add_user.php">Add</a>
    <a href="view_user.php">View</a>
  </div>
      <!--  button of side bar -->

  <button class="drop">Feedback
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown">
    <a href="view_feedback.php">View</a>
  </div>
  <button class="drop">Module
    <i class="fa fa-caret-down"></i>
  </button>
   

  <div class="dropdown">
    <a href="add_module.php">Add</a>
    <a href="view_module.php">View</a>
  </div>

  <button class="drop">Archive
    <i class="fa fa-caret-down"></i>
  </button>
      <!-- drop down button in side bar -->

  <div class="dropdown">
 
    <a href="archive_user.php">View</a>
  </div>
  <button class="drop">Library sites
    <i class="fa fa-caret-down"></i>
  </button>
      <!-- drop down button in side bar -->

  <div class="dropdown">
    <a href="add_library_sites.php">Add</a>
    <a href="view_library_sites.php">View</a>
  </div>
</div>


<script>

// javascript is used to drop down button from sidebar when button is pressed using for loop
var drop = document.getElementsByClassName("drop");
var i;

for (i = 0; i < drop.length; i++) {
  drop[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropContent = this.nextElementSibling;
  if (dropContent.style.display === "block") {
  dropContent.style.display = "none";
  } else {
  dropContent.style.display = "block";
  }
  });
}
</script>

<style>
.sidenav{
  height: 87%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #f1f1f1;
  overflow-x: hidden;
  padding-top: 20px;

}
.sidenav a{
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

@media(min-width:768px) {
    .sidenav {
        z-index: 1;
        position: absolute;
        width: 250px;
        margin-top: 6%;
    }

.sidenav a, .drop {
  padding: 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  
}


.sidenav a:hover, .drop:hover {
  color: black;
}

.active {

  color: brown;
}


.dropdown {
  display: none;
  background-color: #262626;
  padding-left: 6px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

</style>  

