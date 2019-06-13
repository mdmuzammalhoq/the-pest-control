<?php include 'inc/header.php'; ?>          
<?php include 'inc/menubar.php'; ?>
<?php 
		$n = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$content = mysqli_real_escape_string($db->link, $_POST['content']);
		
			$permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['img']['name'];
            $file_size = $_FILES['img']['size'];
            $file_temp = $_FILES['img']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "upload/".$unique_image;

        if ($content == "" ) {
        	$n = "<span style='color: red'>Content field empty !
                 </span>";
        }elseif ($file_size >1048567) {
	         $n = "<span style='color: red'>Image Size should be less then 1MB!
	         </span>";
	        } elseif (in_array($file_ext, $permited) === false) {
	         $n = "<span style='color: red'>You can upload only:-".implode(', ', $permited)."</span>";
	    } else{
	    	move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO  tbl_snake(content, image ) VALUES('$content' , '$uploaded_image')";
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
           <h1 align="center">Add Image With Text </h1>
			</div>
			<table class="table focus-add-table  table-bordered">				
				<tr>
					<th>picture</th>
					<th>Description</th>
					<th>Submit</th>
				</tr>
				<tr>
					<form action="" method="post" enctype="multipart/form-data">
					
					<td><input type="file" name="img" /></td>
					<td><textarea name="content" id="" cols="50" rows="5" placeholder="News  Content" ></textarea></td>
					<td>					
						<input type="submit" value="Submit">	
					</td>
					</form>						
				</tr>
				<?php echo $n; ?>
			</table>
	<?php include 'inc/footer.php'; ?>