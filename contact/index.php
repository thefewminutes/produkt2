<?php # index.php
// this is the contact page of the site

// include the configuration file for error management and such
require_once ('../includes/config.inc.php');

// set the page title and include the HTML header
$page_title = 'Mark D. Johnson - Contact';
include ('../includes/header.php');

// check if the form has been submitted
if(isset($_POST['submitted'])) {
	
	$errors = array(); // initialize the error array
	
	// check for a name
	if(empty($_POST['custname'])) {
		$errors[] = 'You forgot to enter your name!';
	}
	
	// check for a name
	if(empty($_POST['custemail'])) {
		$errors[] = 'You forgot to enter your email address!';
	}
	
	if(empty($errors)) { // if everything's ok
		
		// Send an email
		$body = "Name: '{$_POST['custname']}' . \nEmail: '{$_POST['custemail']}' . \n\n'{$_POST['comments']}'";
		mail ('mark@produkt.us', 'Contact from Mark D. Johnson Website', $body, 'From: thefewminutes@gmail.com');
		
		// display the thank you message
		echo '<h1>Contact Me</h1>
		<p>THANK YOU!</p>
		<p>Your email message has been received. Please allow 24 hrs. to receive a reply.</p>';
		
	} else { // report the errors
	
		echo '<h1>ERROR!</h1>
		<p class="error">The following errors occurred:<br />';
		foreach ($errors as $msg) { // print each error
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please go back and try again.</p>';
	} // end of if(empty($errors)) IF
	
} else { // display the form
?>
        	<hgroup>
   	    		<h1>Contact Me</h1>
        		<h2>You will receive a response within 24 hours</h2>
            </hgroup>
            <p>Please use the form below to contact me</p>
			<form method="post" enctype="application/x-www-form-urlencoded" action="">
 				<p><label>Name:<br><input name="custname" placeholder="Your Name" pattern="^[a-zA-Z0-9]+$" required></label></p>
 				<p><label>E-mail address:<br><input type=email name="custemail" placeholder="your@email.com" pattern="	
(?<email>(?![ ])(\w|[.])*@(\w|[.])*)" required></label></p>
				<input name="submitted" type="hidden" value="TRUE" />
 				<p><label>Comments/Questions:<br><textarea name="comments" cols=50 rows=5 maxlength=1000></textarea></label></p>
 				<p><button>Submit</button><p>
			</form>

<?php
} // close main IF-ELSE
include ('../includes/footer.php');
?>
