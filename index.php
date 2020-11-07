<?php  require_once('config.php'); ?> 
<?php
if(isset($_POST['login']))
{
  extract ($_POST); 
  $username=$EnrollmentNo;
  $password= $Password;
  $query = "SELECT * FROM Admin WHERE EnrollmentNo='$username' AND Password ='$password'";
  $result = mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($result)){
$_SESSION['EnrollmentNo']=$row['EnrollmentNo'];
} 
    $count = mysqli_num_rows($result);
   if($count>0) 
   {
         $_SESSION['login_user'] = $username;
         echo"<script>window.location.href='dashboard.php';</script>";
         exit;
}

    else {
         
         $_SESSION['error']['msg']="<div class='alert alert-danger' role='alert'>Enrollment Number and password Invalid</div>";
        echo"<script>window.location.href='';</script>";
        exit;
                          
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
<body>
<div class="container"> 
     <div class="col-xs-4">
       <form action="" method="post">
            <?php 
            if(isset($_SESSION['error']['msg'])){
             echo $_SESSION['error']['msg']; 
             unset($_SESSION['error']['msg']);
            }
             ?>
           <h1 class="text-center text-primary">Login</h1>
           <label for ="EnrollmentNo">Enrolement Number</label>
           <div class"form-group">
           <input type="text" name="EnrollmentNo" placeholder = "Enter Enrollment Number" value="<?php echo $EnrollmentNo; ?>" class="form-control" >
               <br>
           </div>
           <label for="Password">Password</label>
           <div class"form-group">
           <input type="password" name="Password" value="<?php echo $Password; ?>" placeholder = "Enter password" class="form-control">
           </div>
           <div>
           <br>
           <a href="register.php"class="text-center text-light">Sign Up</a>
           <br>
           </div>
           <a href="forgot_password.php" class="text-center text-light">Forgot Passsword?</a>
           <br>
           <br>
           <input type="submit" name="login" class="btn btn-primary active form-control" value="Submit">
         </form>
    </div>
</div>    
</body>
</html>   