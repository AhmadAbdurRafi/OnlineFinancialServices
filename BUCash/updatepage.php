    <?php
       session_start(); //starts the session
       if($_SESSION['user']){ // checks if the user is logged in  
       }
       else{
          header('location:login.php');// redirects if user is not logged in
       }
       $user = $_SESSION['user']; //assigns user value
    ?>

    <html>
        <head>
            <title > Update Information </title>
            <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            
            
<!--
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
-->
            
         
<!--         <link rel="stylesheet" type="text/css" href="style.css">-->
         <link rel="preconnect" href="https://fonts.gstatic.com">

        </head>
        <body style="background-image: url('image.jpg'); ">

         <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <div class="container-fluid">
          <img src="logo.png" style="height:80px; width:80px; padding-right:10px">
        <a class="navbar-brand" href="home.php" >BRACU CASH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Service.php">Services</a>
                
              </li>
<!--
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="service.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Make Payment </a></li>
                <li><a class="dropdown-item" href="#">Send Money</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Cash Out</a></li>
              </ul>
            </li> 
-->





               <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
              
              
                 <li class="nav-item">
              <a class="nav-link" href="accountinfo.php">Account</a>
            </li>
              
              
              <li class="nav-item">
              <a class="nav-link" href="statementpage.php">Statements</a>
            </li>


                 <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>



          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

<?php       

                ?>
            <h1 style="color: white">Update your information <span class="badge badge-primary">Here</span></h1>
            <div style="text-align: center; padding-top: 50px">
                <form action="update.php" method="POST" >
                      <select name="drop" class="btn btn-secondary btn-block">
                        <option value="name">Name</option>
                        <option value="password">PIN</option>
                        <option value="address">Address</option>
                        <option value="phone">Phone</option>
                      
                      </select>
                      <input type ="text"  name="value" style="text-align: center; width:1366px; height: 40px">
                      <input type="submit" class="btn btn-primary btn-block" value="Update" style="text-align: center;">
                      </form>
            </div>
              
            
            
        </body>
</html>