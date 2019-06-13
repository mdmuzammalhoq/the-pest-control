<?php require('inc/header.php');?>
<?php
	$n = "";
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["phone"]==""||$_POST["email"]==""||$_POST["address"]=="" || $_POST["message"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$message = $_POST['message'];
$headers = 'From:'. $email2 . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("thpestcontrol@gmail.com", $message, $headers);
$n =  "Your mail has been sent successfuly ! Thank you ";
}
}
}
?>
		<hr />
	<div class="contact-form-area section-padding">
		<div class="section-heading">
			<h1>Contact Us</h1>
		</div>
		<div class="contact-form-area-content">
			<?php echo $n; ?>
			<form method="POST" action="">
			  <p></p><input name="name" placeholder="name" type="text"/>  </p>
			  <p> <input name="phone" placeholder="Phone Number" type="text"/></p>  
			  <p><input name="email" placeholder="Your email" type="email"/></p>
			  <p><input name="address" placeholder="Address" type="text"/>  </p>
			  <p><textarea name="message" placeholder="Tell Us Anything"></textarea></p>
			  <p><button type="submit" name="submit">Send</button></p>
			</form>
		</div>
		
	</div>
	<?php require('inc/contact.php') ?>
	<?php require('inc/footer.php') ?>
	
