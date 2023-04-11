<?php
session_start();


    $link = mysqli_connect("localhost", "root","") or die(mysql_error()); 
    mysqli_select_db($link, 'bucash');
    $name = $_POST['user'];
    $pass = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $NID = $_POST['nid'];
    $type = $_POST['type'];
    
    $s= "SELECT * FROM usertable where NID = $NID ";
    $query = mysqli_query($link,$s);
   

    


   if($query->num_rows<1){
      
      $reg="insert into usertable(name,password, address, NID, phone,type) values ('$name','$pass', '$address','$NID', '$phone','$type')";
       
        mysqli_query($link,$reg);
        $acc="insert into account(NID, phone) values ('$NID', '$phone')";
        mysqli_query($link,$acc);
         Print '<script>alert("Registration Successful");</script>';
         Print '<script>window.location.assign("login.php");</script>';
        
    }else{
        

        Print '<script>alert("NID already Registered!");</script>';
        Print '<script>window.location.assign("registrationpage.php");</script>';
    
   }
    
    ?>