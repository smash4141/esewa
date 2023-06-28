
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<title>base</title>
</head>
<body>
	
	<div id="sidebar">
		<div class="toggle-btn" onclick="togglesidebar()">
		  		<span></span>
	  			<span></span>
	  			<span></span>
	  	</div>
	 		<ul>
	 		<li><a href="home.php">Home</a></li>
	 		<div class="sidenav">
			  <button class="dropdown-btn">Login page
			    <i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-container">
			    <a href="login.php">Worker Login</a>
			    <a href="c login.php">Customer Login</a>
			  </div>
			</div>
				<div class="sidenav">
			  <button class="dropdown-btn">Registration
			    <i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-container">
			    <a href="register.php">Worker Signup</a>
			    <a href="signup.php">Customer Signup</a>
			  </div>
			</div>
	  		<li><a href="feedback.php">Feedback</a></li>
			</ul>
		</div>
		<script type="text/javascript">
							function togglesidebar()
				{
				  document.getElementById("sidebar").classList.toggle("active");
				}
		</script>
		<style>

/* Fixed sidenav, full height */
.sidenav {
  height: 100vh;
  width: 200px;
  background:#151719;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  padding-top: auto;
}

/* Style the sidenav links and the dropdown button */
.sidenav a{
  padding: 10px; 
  display:flex;
  background:#151719;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
 .dropdown-btn {
  padding: 10px; 
  display: block;
  background:#151719;
  width: 100%;
  text-align: left;
  cursor: pointer;
  o

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}


/* Add an active class to the active dropdown button */
.active {
   background:#151719;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</body>body>




<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>
