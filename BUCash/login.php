<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Login and Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body id="particles-js" style="background-image: url('loginb.jpg');" >
  <div   class="container" align="center">
  	<div class="login-box" style="color: white">
    <div class="row">
      <div class="col-md-6 login-left">
          <h2><b>Login Here</b></h2>
            
        <form action="validation.php" method="POST">
          <div class="form-group">
            <label>NID</label>
            <input type="text" name="nid" class="form-control" recquired />
              
            </div>
            
            <div class="form-group">
            <label>PIN</label>
            <input type="password" name="password" class="form-control" recquired />
              
            </div>
            <?php
                if(isset($_SESSION['id'])){
                    ?>
                    <div class="alert alert-danger" role="alert">
                       Incorrect Pin!
                    </div>
                    <?php
                        unset($_SESSION['id']);
                        
                }
            
            ?>
                <?php
                if(isset($_SESSION['id2'])){
                    ?>
                    <div class="alert alert-danger" role="alert">
                       Incorrect NID!
                    </div>
                    <?php
                        unset($_SESSION['id2']);
                        
                }
            
            ?>
            <br>
            <button type="submit" class="btn btn-primary" style=" margin-top: 0px;">Log in</button>
         
        </form>
          <br>
          <br>
         <form action="registrationpage.php">
            <button class="btn btn-primary" href="registrationpage.php">For Registration</button>
        </form>
        </div>
       
            
<!--            <button class="btn" type="submit" href="registrationpage.php">For Registration</button>-->
         
        
    </div>
    </div>
 </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="particles.js"></script>
      <script type="text/javascript" src="app.js"></script>
    
</body>
</html>
