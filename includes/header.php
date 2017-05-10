<?php # Script 18.1 - header.html
// This page begins the HTML header for the site.

// Start output buffering:
ob_start();

// Initialize a session:
session_start();

// Check for a $page_title value:
if (!isset($page_title)) {
	$page_title = 'User Registration';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $page_title; ?></title>
	<?php include 'css.html'; ?>
	<!--<style type="text/css" media="screen">@import "includes/layout.css";</style>-->
	
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		<div id='topmenu'style='text-align:right;'><!-- TopMenu-->
			<?php 
			# Script 18.2 - footer.html
								
			// Display links based upon the login status:
			if (isset($_SESSION['user_id'])) {

			echo '<a type="button" href="#" title="Logout">Logout</a>&nbsp&nbsp&nbsp&nbsp<a href="#" title="Change Your Password">Change Password</a>&nbsp&nbsp&nbsp&nbsp';

			// Add links if the user is an administrator:
			if ($_SESSION['user_level'] == 1){ echo '<a href="#" >View Users</a>&nbsp&nbsp&nbsp&nbsp<a href="#">Some Admin Page</a>';}
							
			} else { //  Not logged in.
				echo '<a type="button" href="register.php" >Register</a>&nbsp&nbsp&nbsp&nbsp<a href="#" >Login</a>&nbsp&nbsp&nbsp&nbsp<a href="#">Retrieve Password</a>';
					}
			?>
		</div>   
   
   <nav class="navbar navbar-default" style="background-color:orange; color:white;">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand" href="index.php">Who Go Talk? | Register</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#about">POLITICS</a></li>
			<li><a href="#services">CELEBRITY</a></li>
			<li><a href="#portfolio">RELATIONSHIP</a></li>
			<li><a href="#pricing">SPORTS</a></li>
			<li>
			</li>
			
					
		  </ul>
		</div>
	  </div>
	</nav>
<div class="main_content">
<!-- End of Header -->





