

<?php
	session_start();
	$link = mysqli_connect("localhost", "root","") or die(mysql_error()); //COnnect to server
	$nid = mysqli_real_escape_string($link, $_POST['nid']);
   
	$password = mysqli_real_escape_string($link, $_POST['password']);
//    $type =  mysqli_query($link, "SELECT type from usertable");
    
	mysqli_select_db($link, "bucash") or die("Cannot connect to database"); //Connect to database
	$query = mysqli_query($link, "SELECT * from usertable WHERE NID='$nid' "); //Query the users table if there are matching rows equal to $username
	 //Checks if username exists
	$table_users = "";
	$table_password = "";
    $table_type="";
    $table_nid="";
	if($query->num_rows<1) //IF there are no returning rows or no existing username
	{
            $_SESSION['id2']="1"; 
            header("location:login.php");
//        Print '<script>alert("Incorrect NID!");</script>'; //Prompts the user
//		Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
		
	}
	else
	{  
        while($row = mysqli_fetch_assoc($query)) //display all rows from query
		{
			$table_users = $row['name']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
            $table_type=$row['type'];
            $table_nid=$row['NID'];
		if(($nid == $table_nid) && ($password == $table_password)) // checks if there are any matching fields
		{
				
			
             if ($table_type == "personal"  ){
                $_SESSION['user'] = $table_nid; //set the username in a session. This serves as a global variable
            header("location:home.php"); // redirects the user to the authenticated home page

                
            }
            elseif($table_type=="agent"){
            $_SESSION['user'] = $table_nid; //set the username in a session. This serves as a global variable
            header("location:home.php"); // redirects the user to the authenticated home page
    
                
            }
            
         
            else{
                 $_SESSION['user'] = $table_nid; //set the username in a session. This serves as a global variable
            header("location:home.php"); // redirects the user to the authenticated home page
                
            }
            
				
		}
             
		
		else{
            $_SESSION['id']="1"; 
            header("location:login.php");
			Print '<script>alert("Incorrect PIN!");</script>'; //Prompts the user
//			Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
		}
		}
		
	}
?>