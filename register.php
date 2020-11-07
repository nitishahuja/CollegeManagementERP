<?php require_once('config.php')?>
<?php include "fn.php"?>
<?php  Registration(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    
<body>

<div class= "container" style="margin-top: 80px;">
   
     <div class="col-xs-4">
       <form action="" method="post">
           <?php 
            if(isset($_SESSION['error']['msg'])){
             echo $_SESSION['error']['msg'];
             unset($_SESSION['error']['msg']);
            }
             ?>
           <h1 style="color:skyblue;">Sign Up</h1>
           <label for ="Username">Name</label>
           <div class"form-group">
           <input type="text" name="Name" value="<?php echo $Name; ?>" placeholder = "Enter Name" class="form-control" required >
           <br>
           </div>
           <label for="Email">Email id</label>
           <div class"form-group">
           <input type="email" name="Email" value="<?php echo $Email; ?>" placeholder = "Enter Email id" class="form-control" required>
           </div>
           <br>
           <label for ="Username">Username</label>
           <div class"form-group">
           <input type="text" name="Username" value="<?php echo $Username; ?>" placeholder = "Enter Username" class="form-control" required>
           <br>
           </div>
           <label for="Password">Password</label>
           <div class"form-group">
           <input type="password" name="Password" value="<?php echo $Password; ?>" placeholder = "Enter password" class="form-control" required>
           </div>
           <BR>
           <a href="index.php" style="margin-left: 520px; font-size: 30px; color: white;">Login</a>
           <br>
            <input class="btn btn-primary" type="submit" name="submit" value="submit">
        
         </form>
    
    </div>
    
    


</div>    
</body>
</html>   