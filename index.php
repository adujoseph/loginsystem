<?php


// Include the configuration file:
require ('includes/config.inc.php'); 

// Set the page title and include the HTML header:
$page_title = 'Home Page!';
include ('includes/header.php');


// Welcome the user (by name if they are logged in):
echo '<h1>Welcome';
if (isset($_SESSION['first_name'])) {
	echo ", {$_SESSION['first_name']}";
}
echo '!</h1>';
//Note that this page does not require connection to database, hence the database file is not included
?>







<?php include ('includes/footer.php'); ?>
