<?php require('inc/header.php');?>
	<div class="slider-area container">
			 <div id="fawesome-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#fawesome-carousel" data-slide-to="0"></li>
			<li data-target="#fawesome-carousel" data-slide-to="1"></li>
			<li data-target="#fawesome-carousel" data-slide-to="2"></li>			
			<li data-target="#fawesome-carousel" data-slide-to="3"></li>			
			<li data-target="#fawesome-carousel" data-slide-to="4"></li>			
		</ol>	 
		<div class="carousel-inner" role="listbox">			
						<?php 
							$query = "SELECT * FROM tbl_slider order by id DESC LIMIT 5";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>							
						<div class="item ">
							<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">
							<h1><?php echo $result['title']; ?></h1>
						</div>	
						<?php } } ?>							
		</div>	 
				<a class="left control left-control fawesome-control" href="#fawesome-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="right control right-control fawesome-control" href="#fawesome-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div>			
	</div>
	<div class="welcome-area container  section-padding">
			<div class="section-heading">
				<h1>Welcome To Our Website</h1>				
			</div>
		<div class="welcome-content container">
		
			<div class="welcome-item col-md-4">
				<div class="welcome-item-inner">
					<i class="fa fa-star"></i>
					<h2>5 Star Protection</h2>
					<p>We provide the 5 star protection plan<br> guarantees you stay safe from pest without<br> hassle. Saves your money.</p>
				</div>
			</div>
			<div class="welcome-item col-md-4">
				<div class="welcome-item-inner">
					<i class="fa fa-home"></i>
					<h2>Pests Library</h2>
					<p>Certain pests can be very dangerous<br> and even deadly to humans and pets.<br> get more information with our pest library.</p>
				</div>
			</div>
			<div class="welcome-item col-md-4">
				<div class="welcome-item-inner">
					<i class="fa fa-search"></i>
					<h2>Free Inspection</h2>
					<p>Schedule a Complimentary inspection of your<br> Residential or Commercial place and effectively <br>rid your life of pests!</p>
				</div>
			</div>
			
		</div>		
	</div>
	<div class="service-area section-padding">
			<div class="section-heading">
				<h1>Welcome To Our Service</h1>				
			</div>
		<div class="service-content container">
			<div class="service-item pad_0 service-change col-md-4">				
				<h1>Customer Service</h1>
				<p>Need Help ?? </p>
				<p>Just Click The Number </p>
				<p> <a href="tel:8801705000872">+8801705-000872</a></p>
				<p> Our Team Will Always Support You.</p>
				<p>24 / 7 Hours Support</p>
			</div>
			<div class="service-item col-md-4">
				<?php 
							$query = "SELECT * FROM tbl_commercial order by id DESC LIMIT 1";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>							
						
							<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">
							<a href="commertial.php">Commertial Pest Control >></a>
							<p><?php echo $result['content']; ?></p>
						
						<?php } } ?>	
			</div>
			<div class="service-item col-md-4">
			<?php 
							$query = "SELECT * FROM tbl_residencial order by id DESC LIMIT 1";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>							
						
							<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">
							<a href="residential.php">Commertial Pest Control >></a>
							<p><?php echo $result['content']; ?></p>
						
						<?php } } ?>				
			</div>
		</div>		
	</div>
	<div class="ask-area section-padding">
		<div class="ask-content container text-center">	
			
			<div class="ask-item col-md-5">
				<h1> Any Question ? </h1>
				<h2> - Tell Us - </h2>
				<p>You’re not alone. If you’ve had a close encounter<br> with pests and need some answers, just Ask <br>The Orkin Man. Or, search hundreds of questions <br>from people just like you.</p>

<?php
	$n = "";
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["email"]==""|| $_POST["message"]==""){
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
$n =  "Your mail has been sent successfuly ! Thank you for your feedback.";
}
}
}
?>
			<span><?php echo $n; ?></span>
				<form class="form" action="" method="POST">
					<p>
						<input name="email" placeholder="Your email" type="email">
					</p>
					<p>
						<textarea name="message" placeholder="Your message"></textarea>
					</p>
					<p><button type="submit" name="submit">Send</button></p>
				</form>
			</div>
			<div class="ask-item col-md-3">
				<img src="img/ask-item.png" alt="" />
			</div>
			<div class="ask-item col-md-4">
				<div class="ask-item-inner">
					<h1>Th Lab Notes</h1>
						<?php 
							$query = "SELECT * FROM tbl_lab_notes order by id DESC LIMIT 1";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>							
						
							<p><?php echo $result['content']; ?></p>
							<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">
							<a href="blog.php">Start Exploring</a>						
						<?php } } ?>
				</div>
			</div>			
		</div>
	</div>
	<div class="progress-area section-padding">
		<div class="section-heading">
			<h1>Our Performance</h1>
		</div>
		<div class="progress-content">			
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<h3 class="progress-title">Best Service</h3>
						<div class="progress">
							<div class="progress-bar" style="width:99%; background:#97c513;">
								<div class="progress-value">100%</div>
							</div>
						</div> 
						<h3 class="progress-title">Good Quality</h3>
						<div class="progress">
							<div class="progress-bar" style="width:99%; background:#f2545b;">
								<div class="progress-value">100%</div>
							</div>
						</div>
						<h3 class="progress-title">Good Products</h3>
						<div class="progress">
							<div class="progress-bar" style="width:99%; background:#3498db;">
								<div class="progress-value">100%</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="research-area section-padding">
		<div class="section-heading">
			<h1>Common Pests</h1>
		</div>
		<div class="reaserch-content container">
			<div class="research-item col-md-4">
				<div class="reaserch-item-inner">
					<div class="research-img">
						<img src="img/bug/bed-bug.jpg" alt="" />
					</div>
					<h3>Bed Bug Pest Control</h3>
					<div class="research-text">
						<p>
							Bedbug is small and flattened elliptical (Oval) shaped insect, reddish brown in color and about 0.7mm long. Bedbug’s color is nearly white after ecdysiast, and then reach from t bronze color to burn orange.
						</p>
					</div>
					<p>
						<a class="a_effect" target="_blank" href="contact-us.php">Get Service</a>
						<a class="a_effect" target="_blank" href="bug/bed-bug.php">Read More</a>
					</p>
				</div>				
			</div>
			<div class="research-item col-md-4">
				<div class="reaserch-item-inner">
					<div class="research-img">
					<img src="img/bug/ant.jpg" alt="" />
				</div>
				<h3>Ants Pest Control</h3>
				<div class="research-text">
					<p>
						Red Imported Fire Ants, Argentine Ants, Black House Ant, Carpenter Ants are a few of the common kinds of ant which we may find in our homes. But we know how to get rid from these insects.Lets Try 
					</p>
				</div>
					<p>
						<a class="a_effect" target="_blank" href="contact-us.php">Get Service</a>
						<a class="a_effect" target="_blank" href="bug/ants.php">Read More</a>
					</p>
				</div>				
			</div>
			<div class="research-item col-md-4">
				<div class="reaserch-item-inner">
					<div class="research-img">
					<img src="img/bug/cockroach.jpg" alt="" />
				</div>				
				<h3>Cockroach Pest Control</h3>
				<div class="research-text">
					<p>
						Cockroach is the common pest of our living. We can see cockroaches in every place like house, office, hotel etc. It has remained almost unchanged for over 300 million years.Lets Try with TH Pest Control.
					</p>
				</div>
				<p>
					<a class="a_effect" target="_blank" href="contact-us.php">Get Service</a>
					<a class="a_effect" target="_blank" href="bug/cockroach.php">Read More</a>
				</p>
				</div>				
			</div>
			
		</div>
		<div class="container">
			<div class="research-item col-md-4">
				<div class="reaserch-item-inner">
					<div class="research-img">
					<img src="img/bug/termite.jpg" alt="" />
				</div>
				<h3>Termite Pest Control</h3>
				<div class="research-text">
					<p>
						Termite has over 3000 narrated species. main three species termites of these numerous species are damp wood termites, subterranean termites and drywood termites.Termite are so much Harmfull
					</p>
				</div>
				<p>
				<a class="a_effect" target="_blank" href="contact-us.php">Get Service</a>
					<a class="a_effect" target="_blank" href="bug/termite.php">Read More</a></p>				
				</div>				
			</div>
			<div class="research-item col-md-4">
				<div class="reaserch-item-inner">
					<div class="research-img">
					<img src="img/bug/rat.jpg" alt="" />
				</div>
				<h3>Rats Pest Control</h3>
				<div class="research-text">
					<p>
						Rat is a mammal of Rodentia family, characterized by a single pair of incessantly gnawing incisors in each of the upper and lower jaws that must be kept short by gnawing.Rats poisoned our food.
					</p>
				</div>
					<p>
					<a class="a_effect" target="_blank" href="contact-us.php">Get Service</a>
					<a class="a_effect" target="_blank" href="bug/rat.php">Read More</a>
					</p>
				</div>				
			</div>
			<div class="research-item col-md-4">
				<div class="reaserch-item-inner">
					<div class="research-img">
					<img src="img/bug/fruitfly.jpg" alt="" />
				</div>
				<h3>Fruit Fly Pest Control</h3>
				<div class="research-text">
					<p>
						Look first for fruit fly sources in areas where vegetables or fruits are stored outside refrigeration. Also look for fruit fly sources in garbage cans, under appliances, and recycling bins. 
					</p>
				</div>
				<p>
					<a class="a_effect" target="_blank" href="contact-us.php">Get Service</a>
					<a class="a_effect" target="_blank" href="bug/fruitfly.php">Read More</a>
				</p>
				</div>				
			</div>
			<div class="research-item col-md-4">
				<div class="reaserch-item-inner">
					<div class="research-img">
					<img src="img/bug/fly-insect.jpg" alt="" />
				</div>
				<h3>Fly Insect</h3>
				<div class="research-text">
					<p>
						There are more than 120,000 species of flies worldwide with about 18,000 found in North America. A female housefly can lay up to 600 eggs in her short lifetime. like most Furishous Animal.
					</p>
				</div>
					<p>
						<a class="a_effect" target="_blank" href="contact-us.php">Get Service</a>
						<a class="a_effect" target="_blank" href="bug/fruitfly.php">Read More</a>
					</p>
				</div>				
			</div>
			<div class="research-item col-md-4">
				<div class="reaserch-item-inner">
					<div class="research-img">
					<img src="img/bug/snake.jpg" alt="" />
				</div>
				<h3>Snake Pest Control</h3>
				<div class="research-text">
					<p>
						Snakes are found around residential properties for a number of different reasons. Snakes are very primitive creatures, they require food; water and shelter just .Snake is a Harmfull Animal
					</p>
				</div>
					<p>
						<a class="a_effect" target="_blank" href="contact-us.php">Get Service</a>
						<a class="a_effect" target="_blank" href="bug/snake.php">Read More</a>
					</p>
				</div>				
			</div>	
		</div>
	</div>	
	</div>
	<div class="client-area section-padding">
		<div class="section-heading">
			<h1>Our Happy Clients</h1>			
		</div>
		<div class="container">
		<div class="client-content " id="client-slider">
			<?php 
							$query = "SELECT * FROM tbl_home_client order by id DESC";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>							
						<div class="client-item ">			
							<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">
						</div>							
				<?php } } ?>
		</div>
		</div>
	</div>
	<?php require('inc/location.php'); ?>
	<?php require('inc/contact.php'); ?>
	
	<div class="developer-area ">
		<p>Developed By -<a href="http://dewanict.com" target="_blank"><img src="img/footer.png" alt="" /></a></p>
	</div>
	
	
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/jquery.main.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/animatedhead.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>
