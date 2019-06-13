<?php 
    include "../lib/Session.php";
    Session::checkLogin();
  include '../lib/config.php';
  include '../lib/database.php';
  include '../lib/format.php';


  $db = new Database();
  $fm = new Format();
?>
<?php 
        $n = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $username = $fm -> validation($_POST['username']);
      $password = $fm -> validation(md5($_POST['password']));

      $username = mysqli_real_escape_string($db->link, $username);
      $password = mysqli_real_escape_string($db->link, $password);

      $query = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
      $result = $db->select($query);
      if($result){
        $value = mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);
        if($row > 0){

          Session::set("login", true);
          Session::set("username", $value['username']);
          Session::set("id", $value['id']);
          header("Location:index.php");
          
        }else{
          $n = "<span style ='color: red; font-size=18px; '>No Result Found !!</span>";
        } 
        }else{
          $n = "<span style ='color: red; font-size=18px; padding-left: 92px; '>Username or Password Not Matched !!</span>";
      }
    }
  ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Th Pest Control</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/maruti-login.css" />
    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="login.php" method="post">
				 <div class="control-group normal_text"> <h3><img src="../img/logo.png" alt="Logo" /></h3></div>
                 <span> <?php echo $n; ?> </span>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" name="username" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/maruti.login.js"></script> 
    </body>

</html>
