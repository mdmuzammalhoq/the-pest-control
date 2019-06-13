<?php require('inc/header.php'); ?>
		<hr />
	<div class="slider-area section-padding container">
					<?php 
							$query = "SELECT * FROM tbl_team_front_image order by id DESC LIMIT 1";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>			
				<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">			
				<?php } } ?>
		
		
	</div>	 
	
	<div class="client-area section-padding">
		<div class="section-heading">
			<h1>Our Happy Clients</h1>			
		</div>
		<div class="container">
		<div class="client-content " id="">
				<?php 
							$query = "SELECT * FROM tbl_home_client order by id DESC ";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>		
			<div class="client-item page-client ">
				<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">	
			</div>						
				<?php } } ?>
		</div>
		</div>
	</div>
	
	<?php require('inc/contact.php'); ?>
	<?php require('inc/footer.php'); ?>
	
	
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/jquery.main.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>
