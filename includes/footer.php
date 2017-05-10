
  


</div>
<hr>
<footer class="container-fluid text-center"><!-- Start of Footer -->
<div id="Menu">
	<a href="index.php" title="Home Page">Home</a>&nbsp&nbsp&nbsp
	<?php # Script 18.2 - footer.html
	// This page completes the HTML template.
	//boostrap linking
	include 'css.html';
	// Display links based upon the login status:
	if (isset($_SESSION['user_id'])) {

		echo '<a href="logout.php" title="Logout">Logout</a>
	<a href="change_password.php" title="Change Your Password">Change Password</a>
	';

		// Add links if the user is an administrator:
		if ($_SESSION['user_level'] == 1) {
			echo '<a href="view_users.php" title="View All Users">View Users</a>
		<a href="#">Some Admin Page</a>
		';
		}
	
	} else { //  Not logged in.
		echo '<a href="register.php" title="Register for the Site">Register</a>&nbsp&nbsp&nbsp
	<a href="login.php" title="Login">Login</a>&nbsp&nbsp&nbsp
	<a href="forgot_password.php" title="Password Retrieval">Retrieve Password</a>&nbsp&nbsp&nbsp
	';
	}
	?>
	<!--<a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
    </a> -->
  <p>Original Trademark of WhoGoTalk Nigeria <a href="http://www.w3schools.com" title="Visit our site"> | whogotalk.com</a></p>
</div><!-- Menu -->
</footer>
</body>
</html>
<?php // Flush the buffered output.
ob_end_flush();
?>