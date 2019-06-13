<?php include 'inc/header.php'; ?>          
<?php include 'inc/menubar.php'; ?>
<?php 
		$n = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$content = mysqli_real_escape_string($db->link, $_POST['content']);
		
        if ($content == "" ) {
        	$n = "<span style='color: red'>Content field empty !
                 </span>";
        } else{
	    	 $query = "INSERT INTO  tbl_about_company(content ) VALUES('$content')";
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
                <h1 align="center">Add </h1>
			</div>
			<table class="table focus-add-table  table-bordered">				
				<tr>
					<th>News Content</th>
					<th>Submit</th>
				</tr>
				<tr>
					<form action="" method="post" enctype="multipart/form-data">
					
					<td><textarea name="content" id="" cols="50" rows="5" placeholder="News  Content" ></textarea></td>
					<td>					
						<input type="submit" value="Submit">	
					</td>
					</form>						
				</tr>
				<?php echo $n; ?>
			</table>
	<?php include 'inc/footer.php'; ?>