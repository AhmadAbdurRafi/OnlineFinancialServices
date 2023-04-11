<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in
   }
   else{
      header("home.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
?>
<?php


    $link = mysqli_connect("localhost", "root","") or die(mysql_error());//Connect to server
    mysqli_select_db($link, "bucash") or die("Cannot connect to database"); //Connect to database
    $details = $_POST['value'];
    mysqli_error($link);
    $nid = $_SESSION['user'];
    $column = $_POST['drop'];
    mysqli_query($link, "UPDATE usertable SET $column='$details' WHERE NID='$nid'");

    Print '<script>window.location.assign("accountinfo.php");</script>';

?>