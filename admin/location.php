<?php include 'inc/header.php'; ?>          
<?php include 'inc/menubar.php'; ?>
<?php 
		$n = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$title   = mysqli_real_escape_string($db->link, $_POST['headline']);
		
        if ($title == "") {
        	$n = "<span style='color: red'>Title field empty !
                 </span>";
        }
		else{
            $query = "INSERT INTO  tbl_location(title) VALUES('$title')";
            $focus_insert = $db->insert($query);
            if ($focus_insert) {
            	$n = "<span style='color: green; text-align: center;'>Data Inserted Successfully.
                 </span>";
            }else{
            	$n = "<span style='color: red'>Data NOT Inserted.
                 </span>";
            }
        }
	}
?>
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb">
				 <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				</div>
                <h1 align="center">Add Service Location </h1>
			</div>
			<table class="table focus-add-table  table-bordered">				
				<tr>
					<th>headline</th>					
					<th>Submit</th>
				</tr>
				<tr>
					<form action="" method="post" enctype="multipart/form-data">
					
					<td><input type="text" name="headline" placeholder="title"></td>
					<td>					
						<input type="submit" value="Submit">	
					</td>
					</form>						
				</tr>
				<?php echo $n; ?>
			</table>
	<?php include 'inc/footer.php'; ?>