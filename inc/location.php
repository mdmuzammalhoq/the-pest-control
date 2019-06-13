<div class="location-area section-padding">
		<div class="section-heading">
			<h1>Our Service Area</h1>
		</div>
		<div class="location-content container">
		<?php 
				$query = "SELECT * FROM tbl_location order by id DESC";
				$focus = $db->select($query);
					if ($focus) {
					while ($result = $focus->fetch_assoc()) {
				?>		
				<div class="location-item col-md-2">
					<p><?php echo $result['title']; ?></p>							  
				</div>						
			<?php } } ?>	
		</div>
	</div>