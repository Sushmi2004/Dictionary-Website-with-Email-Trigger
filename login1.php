
<?php
include 'dbconnectivity.php';

$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted

 
 // Check if username is empty
 if(empty(trim($_POST["username"]))){
     $username_err = "Please enter username.";
 } else{
     $username = trim($_POST["username"]);
 }

 // Check if password is empty
 if(empty(trim($_POST["password"]))){    
     $password_err = "Please enter your password.";
 } else{
     $password = trim($_POST["password"]);
 }
 
$sql = " SELECT * FROM user WHERE username = '$username' ";
$sql1 = mysqli_query($db,$sql);
$count = 0;

if(mysqli_num_rows($sql1) > 0)
{
    while($row = mysqli_fetch_assoc($sql1))
    {
        $user = $row['Username'];
        $pass = $row['Password'];
        if($user == $username && $pass == $password)
        {
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["name"] = $username; 
            header('refresh:0;url=index.php');
            exit;
        }
        $count = 1;
    }
    if($count == 1)
    {
        echo "Password is incorrect";
        header('refresh:2;url=login.php');
        exit;
    }

}

else {
    echo "Username doesn't exist";
    header('refresh:2;url=login.php');
    exit;
}


 // Validate credentials
 if(empty($username_err) && empty($password_err)){
     // Prepare a select statement
     $sql = "SELECT* FROM user WHERE username = ?";
     
     if($stmt = mysqli_prepare($db, $sql)){
         // Bind variables to the prepared statement as parameters
        
         
         // Set parameters
         $param_username = $username;
         
         // Attempt to execute the prepared statement
         if(mysqli_stmt_execute($stmt)){
             // Store result
             mysqli_stmt_store_result($stmt);
             
             // Check if username exists, if yes then verify password
             if(mysqli_stmt_num_rows($stmt) == 1){                    
                 // Bind result variables
                 mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                 if(mysqli_stmt_fetch($stmt)){
                     if(password_verify($password, $hashed_password)){
                         // Password is correct, so start a new session
                         session_start();
                         
                         // Store data in session variables
                         $_SESSION["loggedin"] = true;
                         $_SESSION["id"] = $id;
                         $_SESSION["name"] = $username;                            
                         
                         // Redirect user to welcome page
                         header("location: index.php");
                     } else{
                         // Password is not valid, display a generic error message
                         echo "Invalid username or password.";
                     }
                 }
             } else{
                 // Username doesn't exist, display a generic error message
                 echo "Username doesn't exist.";
             }
         } else{
             echo "Oops! Something went wrong. Please try again later.";
         }

         // Close statement
         mysqli_stmt_close($stmt);
     }
 }
 
 // Close connection
 mysqli_close($db);


?>
