<?php require_once('config.php'); ?>
<?php
function Registration()
{
if(isset($_POST['submit']))
    {
    global $connection;
    extract($_POST);
    $name=$Name;
    $email=$Email;
    $username=$Username;
    $password=$Password;
    $query = "SELECT * FROM registration WHERE username='$Username'";
    $result = mysqli_query($connection,$query);
    $num = mysqli_num_rows($result);
    if($num>0)
    {
     $_SESSION['error']['msg']="<div class='alert alert-danger' role='alert'>Username Exists</div>";
    }
    else{
       $encpassword=md5($password);
     $query = "INSERT INTO registration(name,email,username,password) VALUES('$name','$email','$username','$encpassword')";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result)
    {
        die("QUERY FAILED". mysql_error());
    }
    else if($result)
    {
         $_SESSION['error']['msg']="<div class='alert alert-success' role='alert'>Sign Up successful </div>";
         echo"<script>window.location.href='';</script>";
            
        exit;
    }
        
        
    }
}
}


    