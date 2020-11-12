<?php require_once('config.php'); ?>
<?php 

 if(isset($_SESSION['login_user'])) {
    
    $EnrollmentNo = $_SESSION['login_user'];
}

?>
<?php 
    include "header.php";?>
      <?php include "navbar.php"; ?>
      <div class="container" style="margin-top: 150px;">
        <h1 class="text-center">Notice Board</h1>
                </h1>
                <hr>
                <?php 
                $query = "SELECT * FROM posts ORDER BY DATE (post_date) DESC";
                $select_all_post_query = mysqli_query($connection,$query);                 
                $titles = array();
                while($row = mysqli_fetch_assoc($select_all_post_query ))
                 {
                  ?>
                <h2>
                <small><?php echo $post_title; ?> </small>
                </h2>
                <img class="img-fluid" src="./assets/images/<?php echo $row['post_image']; ?>">    
                <hr>
                <p><?php echo $row['post_content']; ?> </p>
                <p class="lead">
                   <small>
                    by <?php echo $row['post_author']; ?>
                </small>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $row['post_date']; ?> </p>
                <hr>
                <?php
              }
              ?>
              </div>
      <?php include "footnote.php"; ?>
<?php include "footer.php"; ?>