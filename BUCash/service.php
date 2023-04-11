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
            <title> BRACU CASH Services </title>
            <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="preconnect" href="https://fonts.gstatic.com">

        </head>
        <body  style=" background-image: url('loginb.jpg');">

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            
            
            
            
            
            
            
            
            
            
            
            
            
         
 
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/ 4.5.2/css/bootstrap.min.css">


  <div id="particles-js" class="container" style="height:100%">
  	<div class="login-box" style="color: white; margin: 5% 0% 0% 28%;">
    <div class="row">
      <div class="col-md-6 login-left"  >
        <h2> Information </h2>
        <form action="transaction.php" method="POST">
          <div class="form-group">
            <label>Reciever ID</label>
            <input type="text" name="nid" class="form-control" recquired style="width:100%">
              
            </div>
            <div class="form-group">
            <label>Amount </label>
            <input type="text" name="amount" class="form-control" recquired style="width:100%">
              
            </div>
              <div class="form-group">
            <label>Pin </label>
            <input type="password" name="pin" class="form-control" recquired style="width:100%">
              
            </div>
            
            <div class="form-group">
                <label>Service </label>
                <select name="type" >
                <option value="sendmoney">Send Money</option>
                <option value="cashout">Cash Out</option>
                <option value="payment">Make Payment</option>
                        
   
                       </select> 
            </div>
            
            
            <button type="submit" class="btn btn-primary">Proceed</button>
         
        </form>
      </div>
     

       
            
<!--            <button class="btn" type="submit" href="registrationpage.php">For Registration</button>-->
         
        
    </div>
    </div>
 </div>
           
            
            
            
            
            
            
                    <script type="text/javascript" src="particles.js"></script>
        <script type="text/javascript" src="app.js"></script>
            
            
            
            
            

                </body>

    </html>