<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
	
	<style>
				/* The side navigation menu */
				.sidenav {
				  height: 100%; /* 100% Full-height */
				  width: 0; /* 0 width - change this with JavaScript */
				  position: fixed; /* Stay in place */
				  z-index: 1; /* Stay on top */
				  top: 0; /* Stay at the top */
				  left: 0;
				  background-color: #111; /* Black*/
				  overflow-x: hidden; /* Disable horizontal scroll */
				  padding-top: 60px; /* Place content 60px from the top */
				  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
				}

				/* The navigation menu links */
				.sidenav a {
				  padding: 8px 8px 8px 32px;
				  text-decoration: none;
				  font-size: 25px;
				  color: #818181;
				  transition: 0.3s;
				}

				/* When you mouse over the navigation links, change their color */
				.sidenav a:hover, .dropdown-btn:hover {
				  color: #f1f1f1;
				}
				.active {
				  background-color: green;
				  color: white;
				}
				.dropdown-container {
				  display: none;
				  background-color: #262626;
				  padding-left: 8px;
				}
				
				/* Position and style the close button (top right corner) */
				.sidenav .closebtn {
				  position: absolute;
				  top: 0;
				  right: 25px;
				  font-size: 36px;
				  margin-left: 50px;
				}

				/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
				#main {
				  
				}

				/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
				@media screen and (max-height: 450px) {
				  .sidenav {padding-top: 15px;}
				  .sidenav a {font-size: 18px;}
				}
				.body{
					
					background-repeat: no-repeat;
					background-attachment: fixed;
					background-size: 100% 100%;
					background-image: url("home.png");
					color:white;
				}
				.dropdown-btn {
					  padding: 6px 8px 6px 16px;
					  text-decoration: none;
					  font-size: 25px;
					  color: #818181;
					  display: block;
					  border: none;
					  background: none;
					  width:100%;
					  text-align: left;
					  cursor: pointer;
					  outline: none;
					}
				.homeicon{
					background-image: url("homeicon.png");
				}
		</style>
</head>
<body class="body">

		<div id="main" >
		<div>
            <?php include 'header.php'; ?>
        </div>
			<span onclick="openNav()"><button type="button" style="background-color:grey; font-size:20px; color:white; position: absolute; left: 50px; top: 50px;">Menu</button></span>
 
		
		</div>
        <div>
			<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<button class="dropdown-btn"> <div class="homeicon"></div>Home
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-container">
				<a href="#">Dashboard</a>
			  </div>
			<button class="dropdown-btn">Appointent
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-container">
				<a href="Appointment.php">Appointment</a> <br> 
				<a href="#">Edit Appointment</a>
                </li>
			  </div>
			<button class="dropdown-btn">Billing
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-container">
				<a href="Billing.php">Billing</a> <br> 
				<a href="EditBilling.php">Edit Billing</a>
                </li>
			  </div>
			 <button class="dropdown-btn">Purches
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-container">
				<a href="#">Purches</a> <br> 
				<a href="#">Edit Purches</a>
                </li>
			  </div>
			<button class="dropdown-btn">Supplier
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-container">
				<a href="#">Supplier</a> <br> 
				<a href="#">Edit Supplier</a>
                </li>
			  </div>
			<button class="dropdown-btn">Tarrif
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-container">
				<a href="#">Tarrif</a>  <br> 
				<a href="#">Edit Tarrif</a>
                </li>
			  </div>
		</div>

        </div>
		<div style="transition: margin-left .5s; padding:18%; font-size:40px;">
			<marquee><strong>Demo</strong></marquee>
		</div>
       <div style="transition: margin-left .5s; padding: 5px;">
			<?php include 'header.php'; ?>
			
        </div>
		<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		  document.getElementById("main").style.marginLeft = "250px";
		  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		}

		/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		  document.getElementById("main").style.marginLeft = "0";
		  document.body.style.backgroundColor = "white";
		}
		
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