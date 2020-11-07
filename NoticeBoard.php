<?php require_once('config.php'); ?>
<?php 

 if(isset($_SESSION['login_user'])) {
    
    $EnrollmentNo = $_SESSION['login_user'];
}

?>
<?php 
    include "header.php";?>
      <?php include "navbar.php"; ?>

      <?php include "footnote.php"; ?>
<?php include "footer.php"; ?>