<?php require('inc/header.php'); ?>
	<hr />
	<div class="who-we-area section-padding">
		<div class="section-heading">
			<h1>Who We Are</h1>
		</div>	
		<div class="who-we-content">
			<div class="container">					
					<?php 
							$query = "SELECT * FROM tbl_who_we order by id DESC LIMIT 1";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>			
				<div class="col-md-6">
					<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">
				</div>
				<div class="col-md-6 who-we-text">
					<p><?php echo $result['content']; ?></p>
				</div>
												
				<?php } } ?>	
			</div>
		</div>
	</div>
	<div class="activities-area section-padding">
		<div class="section-heading">
			<h1>Our Operational Activities</h1>
		</div>	
		<div class="activities-content">
			<div class="container">
					<?php 
							$query = "SELECT * FROM tbl_op1 order by id DESC LIMIT 1";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>			
				<div class="col-md-6 who-we-text">
					<p><?php echo $result['content']; ?></p>					
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">
				</div>
				<?php } } ?>				
			</div>
		</div>
	</div>	
	<div class="use-area section-padding">
		<div class="section-heading">
			<h1>Our Operational Activities</h1>
		</div>	
		<div class="use-content">
			<div class="container">			
				<div class="col-md-6">
						<?php 
							$query = "SELECT * FROM tbl_op2 order by id DESC LIMIT 1";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>			
				<img class="img-responsive" src="admin/<?php echo $result['image']; ?>" alt="">			
				<?php } } ?>
				</div>								
				<div class="col-md-6 use-text">
					<p><i class="fa fa-angle-right"></i>Van Fogg , Fogger Machine.</p>
					<p><i class="fa fa-angle-right"></i>Electric Compressor Machine.</p>
					<p><i class="fa fa-angle-right"></i>ULV Fogger.</p>
					<p><i class="fa fa-angle-right"></i>Petrol Driver Machine.</p>
					<p><i class="fa fa-angle-right"></i>Hudson Sprayer Machine.</p>
					<p><i class="fa fa-angle-right"></i>Pilot Spray Machine.</p>
					<p><i class="fa fa-angle-right"></i>Whatever in necessary in what place</p>			
				</div>
			</div>
		</div>
	</div>	
	<div class="about-srvice-area section-padding">
		<div class="section-heading">
			<h1>Our Service </h1>
		</div>	
		<div class="use-content">
			<div class="container">			
				<div class="col-md-12 about-srvice-text">
					<h3>Spray Service : </h3>
					<p><b>General Spray</b> : Control Eggs(Larva) of Moquitoes,Flies,Cockroaches & Termites.</p>
					<p><b>Pilot Spray</b> : Control all size of Moquitoes,Flies,Cockroaches & Termites.</p>				
					<p><b>Snake Control </b> : Carbolic Acid & Iron device with full of chemical bottle.</p>
					<p><b>Cockroache Gel</b> : Gel which control all specious cockroaches within 45 days. </p>
					<p><b>Glue Service</b> : Glue & Plywood Board which control Rate & Mouse.</p>
					<p><b>Fumigation Service</b> : Which make smoke that control Moquitoes & Flies. Technical Specification : Govt.registered approved Chemicals & Pesticides will be applied preparing chemical & pesticide solution mix with water as directed by Department of Agricultural Extension.Plan protection Wing,and also recommend by World Health Organization (WHO).</p>
				</div>
			</div>
		</div>
	</div>	
	<div class="about-company-area section-padding">
		<div class="section-heading">
			<h1>About Our Company </h1>
		</div>	
		<div class="use-content">
			<div class="container">			
				<div class="col-md-12 about-company-text">
						<?php 
							$query = "SELECT * FROM tbl_about_company order by id DESC LIMIT 1";
							$focus = $db->select($query);
							if ($focus) {
								while ($result = $focus->fetch_assoc()) {
						?>			
				
					<p><?php echo $result['content']; ?></p>					
				
				<?php } } ?>
				</div>
			</div>
		</div>
	</div>	
	<?php require('inc/location.php') ?>
	<?php require('inc/contact.php') ?>
	<?php require('inc/footer.php') ?>
	
	
