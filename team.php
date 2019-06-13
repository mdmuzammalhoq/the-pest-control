<?php require('inc/header.php');?>
		<hr/>
	<div class="team-area ">
		<div class="section-heading">
			<h1>Our Team Members</h1>
		</div>
		<div class="team-content container text-center">
			<div class="row">
				<?php 
					$query = "SELECT * FROM tbl_our_team order by id DESC ";
					$focus = $db->select($query);
						if ($focus) {
							while ($result = $focus->fetch_assoc()) {
					?>		
					<div class="col-md-3 single-item">
					<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">
						<div class="single-item-text">
							<h2><?php echo $result['name']; ?></h2>
								<p><b><?php echo $result['designation']; ?></b></p>
						</div>
					</div>							
				<?php } } ?>							
			</div>		
		</div>	
	</div>	
		
	<?php require('inc/contact.php'); ?>
	<?php require('inc/footer.php'); ?>