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
            <title> Contact Us </title>
            <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            
            
<!--
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
-->
            
         
         <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="preconnect" href="https://fonts.gstatic.com">

        </head>
        <body >
            <div>

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
            
                
                <div class="container contact-form">
                    <h1 style="text-align: left"><b><u>Contact us:</u></b></h1>
                    <hr>
                    <div class="col-md-6" style="font-size:24px"> 
                        <address style="color: white;">66, Mohakhali, Dhaka 1212, Bangladesh</address>
                        <p style="color: white;">Email: bucash@gmail.com</p>
                        <p style="color: white;">Phone: 123456789</p>
                        <p style="color: white;">Fax: 555558888</p>
                    </div>
                    
                    
                
                </div>   
<!--                <img class="img-box" src="image/Contact-us.jpg" alt="HTML5 Icon"  style="width:700px;height:256px; margin: -15% 0% 0% 37%; ">-->

                <img src="image/png/11.png"  alt="avatar" style="width:226px;height:280px; margin: -2% 0% 0% 14%; ">
                <img src="image/png/12.png"  alt="avatar" style="width:226px;height:280px; margin: -3% 0% 0% -5%; ">
                <img src="image/png/13.png"  alt="avatar" style="width:226px;height:280px; margin: -5% 0% 0% -5% ">
                <img src="image/png/14.png"  alt="avatar" style="width:226px;height:280px; margin: -4% 0% 0% -5% ">
              <DeviceCameraIcon size={16} />
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="particles.js"></script>
        <script type="text/javascript" src="app.js"></script>
            </div>

                </body>

    </html>