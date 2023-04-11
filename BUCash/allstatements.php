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
            <title> All Statements </title>
            <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="preconnect" href="https://fonts.gstatic.com">

        </head>
        <body>

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
            <div>
                <p></p>
                <h2 style="color: white; text-align: center; font-size: 300%"> <b> Statements </b> </h2> 
                <p></p>
                
                <?php
                    $host = "localhost"; 
                    $user = "root"; // User /
                    $password = ""; // Password /
                    $dbname = "bucash"; // Database name 
                    $con = mysqli_connect($host, $user, $password, $dbname);
//                    $con=mysqli_connect("localhost", "root","") or die(mysql_error());
                    // Check connection
                    if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                    }
                    $nid = $_SESSION['user'];
                    $result = mysqli_query($con, "SELECT * FROM transaction WHERE NID = $nid ORDER BY date DESC, time DESC");
                   
                    if($result != false){
                      $i=1;
                      while($row = mysqli_fetch_assoc($result)){
                      
                      $txid = $row['txid'];
                      $nid = $row['NID'];
                      $onid = $row['ONID'];
                      $type = $row['type'];
                      $amount = $row['amount'];
                      $time = $row['time'];
                      $date = $row['date'];
                     
                            ?>
                    <div class="card">
                        <p class="btn btn-primary btn-lg" style=" font-size:150%; border:2px solid black; "> <b>Statement no. <?php echo $i; ?> </b> </p> 
                    <div class="thumb-content" style="background-image: url('blue.jpg');">
                       
                      <?php $i=$i+1; ?>
                        <p class="card-text"><b>TXID: </b><?php echo $txid ?></p>
                        <p class="card-text"><b>NID: </b><?php echo $nid ?></p>
                        <p class="card-text"><b>Reciever NID: </b><?php echo $onid ?></p>
                        <p class="card-text"><b>Transacted Amount: </b><?php echo $amount ?>TK</p>
                        <p class="card-text"><b>Time: </b><?php echo $time ?></p>
                        <p class="card-text"><b>Date: </b><?php echo $date ?></p>
                        <p class="card-text"><b>Type: </b><?php echo $type ?></p>
<!--
                      echo '<p>' .$txid.'</p>'; 
                      echo '<a>'.$nid.'</a>';
                      echo '<a>'.$onid.'</a>';
                      echo '<a>'.$type.'</a>';
                      echo '<a>'.$amount.'</a>';
                      echo '<a>'.$time.'</a>';
                      echo '<a>'.$date.'</a>';
-->
                
                    </div>
                     <?php
                    } 
                      
                  }
                ?>
                </div>
                
                
                
            </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            
            

            
            
            
    </body>
</html>
