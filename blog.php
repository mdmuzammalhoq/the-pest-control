<?php require('inc/header.php'); ?>
		<hr />
	<div class="section-heading blog-section-heading">
		<h1>Our Blog Posts</h1>
	</div>
	<div class="blog-area">
			<?php 
							$query = "SELECT * FROM tbl_blog order by id DESC LIMIT 5";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>	
					<div class="container blog-content">
						
						<div class="blog-image">			
							<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">
							<div class="img-hidden-text">							
								<h2><?php echo $result['title']; ?></h2>						
						</div>
						</div>
						
						
						
						<div class="blog-heading">
							<h2><?php echo $result['title']; ?></h2>
						</div>			
						<div class="blog-text ">
							<p><?php echo $result['content']; ?></p>
						</div>
					</div>
					<hr />
				<?php } } ?>	
		<hr />		
	</div>
<?php require('inc/footer.php'); ?>
