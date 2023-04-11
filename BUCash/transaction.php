<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header('location:login.php');// redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
?>


<?php
	
	$link = mysqli_connect("localhost", "root","") or die(mysql_error()); //COnnect to server
	
    $nid= $_SESSION['user'];
    $rnid = mysqli_real_escape_string($link, $_POST['nid']);
   
	$tamount = mysqli_real_escape_string($link, $_POST['amount']);
   
    $pin = mysqli_real_escape_string($link, $_POST['pin']);   

    $type = mysqli_real_escape_string($link, $_POST['type']);   
//    $type =  mysqli_query($link, "SELECT type from usertable");
    
	mysqli_select_db($link, "bucash") or die("Cannot connect to database"); //Connect to database
	$query = mysqli_query($link, "SELECT * from account WHERE NID='$nid' "); //Query the users table if there are matching rows equal to $username
	 //User Balance
    $balance= mysqli_query($link, "SELECT balance from account WHERE NID='$nid'" );
    $row= mysqli_fetch_array($balance);
    $amount= $row['balance'];
     
    //Reciever balance

    $rbalance= mysqli_query($link, "SELECT balance from account WHERE NID='$rnid'" );
    $rrow= mysqli_fetch_array($rbalance);
    $ramount= $rrow['balance'];
 
    if($tamount>$amount){
        Print '<script>alert("Insufficient Balance");</script>'; //Prompts the user
        Print '<script>window.location.assign("service.php");</script>'; // redirects to login.php
	 }

    else{
        $famount= $amount-$tamount; 
        
        mysqli_query($link, "UPDATE account SET balance='$famount' WHERE NID='$nid'");
        
        $txid="";
        $temp="";
        
        while(1==1){
          
            $temp= uniqid();
        
            $query=mysqli_query($link, "SELECT * from transaction WHERE txid='$temp' ");
            
            if($query->num_rows<1){
              
                $txid=$temp;
              
                break;
            }
            
        }
        date_default_timezone_set('Asia/Dhaka');
        $date=date('y.m.d');
        
        $time=date('H:i:s');
       
        mysqli_query($link, "INSERT INTO transaction(txid,amount,NID,ONID,type,time,date) values ('$txid','$tamount', '$nid', '$rnid','$type','$time','$date')");
        
        if($type = "sendmoney"){
            $type="recievedmoney";
        }
        elseif($type="cashout"){
            $type="cashin";
        }
        else{
            $type="recievedpayment";
        }
        
           while(1==1){
          
            $temp= uniqid();
        
            $query=mysqli_query($link, "SELECT * from transaction WHERE txid='$temp' ");
            
            if($query->num_rows<1){
              
                $txid=$temp;
              
                break;
            }
            
        }
        
        mysqli_query($link, "INSERT INTO transaction(txid,amount,NID,ONID,type,time,date) values ('$txid','$tamount', '$rnid', '$nid','$type','$time','$date')");
        
        $framount= $ramount+$tamount;
        
        mysqli_query($link, "UPDATE account SET balance='$framount' WHERE NID='$rnid'");
        Print '<script>alert("Transaction Successful!");</script>'; //Prompts the user
//        Print '<script>alert("Current Balance: "'$amount');</script>';
        Print '<script>window.location.assign("service.php");</script>'; // redirects to login.php
        
        
    }



   

		
		
	
?>