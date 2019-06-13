<?php require('header.php') ?>
		<hr />
		<div class="control-area section-padding">
			<div class="section-heading">
				<h1>Fruit Fly Control</h1>
			</div>
			<div class="cotrol-content">
				<div class="container">
					<div class="row">
							<?php 
							$query = "SELECT * FROM tbl_fruitfly order by id DESC LIMIT 1";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
							?>			
						<div class="col-md-6 control-text">
							<h3>Fruit fly Control & Extermination Information</h3>
							<p><?php echo $result['content']; ?></p>	
			
						</div>
						<div class="col-md-6 control-img">
								<img class="img-responsive" src="../admin/<?php echo $result['image']; ?>" alt="">
					<?php } } ?>	
						</div>
				</div>
					<div class="row">
					
						<div class="col-md-6 control-img">
							<img src="img/die-fruitfly.jpg" alt="" />
						</div>
						<div class="col-md-6 control-text">
						
							<h3>Prevention:</h3>
    <p><i class="fa fa-angle-right"></i>The best way to avoid problems with fruit flies is to eliminate sources of attraction. </p>
    <p><i class="fa fa-angle-right"></i>Produce which has ripened should be eaten, discarded or refrigerated.</p>
   <p><i class="fa fa-angle-right"></i>  Cracked or damaged portions of fruits and vegetables should be cut away and discarded in the event that eggs or larvae are present in the wounded area.</p>
   <p><i class="fa fa-angle-right"></i> A single rotting potato or onion forgotten at the back of a closet, or fruit juice spillage under a refrigerator can breed thousands of fruit flies. So can a recycling bin stored in the basement which is never emptied or cleaned.</p>
 
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-us section-padding">
		<div class="section-heading">
			<h1>Contact Us For Prevention</h1>
		</div>
		<div class="contact-content container text-center">
			<div class="col-md-4 social">			
				<div class="social-inner">
					<h1>Head Office</h1>
						<p>337 Muktobangla Shopping Complex(2nd floor)</p>
						<p>Mirpur,Dhaka,Bangladesh</p>
						<p>Cell:01705000872,01773818125</p>
						<p>E-mail:thpestcontrol@gmail.com</p>				
					<a target="_blank" href="https://www.facebook.com/thpestcontrol"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://www.youtube.com/channel/UCl0zAXTT5_54PlCd0PmpFmg"><i class="fa fa-youtube"></i></i></a>				
					<a target="_blank" href=""><i class="fa fa-twitter"></i></i></a>
					<a target="_blank" href=""><i class="fa fa-skype"></i></i></a>
				</div>
			</div>
			<div class="col-md-4 social">
				<div class="social-inner">
					<h1>Chittagong Office</h1>
						<p>Ample Commercial Building(2nd floor)</p>
						<p>2315 SK Mujib Road,Agrabad,Chittagong</p>
						<p>Cell:01705000872,01773818125</p>
						<p>E-mail:thpestcontrol@gmail.com</p>						
					<a target="_blank" href="https://www.facebook.com/thpestcontrol"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://www.youtube.com/channel/UCl0zAXTT5_54PlCd0PmpFmg"><i class="fa fa-youtube"></i></i></a>				
					<a target="_blank" href=""><i class="fa fa-twitter"></i></i></a>
					<a target="_blank" href=""><i class="fa fa-skype"></i></i></a>		
				</div>
			</div>
			<div class="col-md-4 social">			
				<div class="social-inner">
					<h1>Khulna Office</h1>
						<p>265 Shonkho Market Shopping Complex(2nd floor)</p>
						<p>Lohar Jessore Road,Khulna</p>
						<p>Cell:01705000872,01773818125</p>
						<p>E-mail:thpestcontrol@gmail.com</p>				
					<a target="_blank" href="https://www.facebook.com/thpestcontrol"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://www.youtube.com/channel/UCl0zAXTT5_54PlCd0PmpFmg"><i class="fa fa-youtube"></i></i></a>				
					<a target="_blank" href=""><i class="fa fa-twitter"></i></i></a>
					<a target="_blank" href=""><i class="fa fa-skype"></i></i></a>				
				</div>
			</div>
		</div>
	</div>
	<div class="copyright ">
		<h2> &copy; <a href="http://thpestcontrol.com/"> Th Pest Control</a></h2>
	</div>
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/jquery.main.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>
