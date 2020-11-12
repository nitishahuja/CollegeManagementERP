<?php require_once('config.php'); ?>
<?php

   if(isset($_SESSION['login_user'])) {
    
    $EnrollmentNo = $_SESSION['login_user'];
}


    if(isset($_POST['submit'])){
        global $connection;
        $S_name = $_POST['Sub_name'];
        $F_name = $_POST['Fac_name'];
        $feedback = $_POST['description'];
        $query = "INSERT INTO Feedback(Subject_Name,Faculty_Name,Description) VALUES ('$S_name', '$F_name', '$feedback');";
        $result = mysqli_query($connection,$query);
        if(!$result){
            $_SESSION['error']['msg']="<div class='alert alert-danger' role='alert'>Oops! There Was some error,Please Try Again</div>";
        }
        else if($result){
            $_SESSION['error']['msg']="<div class='alert alert-success' role='alert'>FeedBack Submitted!</div>";
         echo"<script>window.location.href='';</script>";
            
        exit;
        }
    }
?>

<?php 
    include "header.php";?>
      <?php include "navbar.php"; ?>

      <div class="help" style="margin-top: 200px;">
        <div class="container">
            <form action="" method="POST">
            <?php 
            if(isset($_SESSION['error']['msg'])){
             echo $_SESSION['error']['msg'];
             unset($_SESSION['error']['msg']);
            }
             ?>
                <h3 class="text-center">Feedback</h3>
                <label for="">Subject</label>
                <select class="form-control" name="Sub_name" id="subjects">
                <?php

                    $query = "SELECT * FROM AttendanceDetails WHERE EnrollmentNo = '{$EnrollmentNo}' ";
                    $select_user_profile_query = mysqli_query($connection, $query);
                    while($data = mysqli_fetch_array($select_user_profile_query)){
                        
                        ?>
                    <option><?php echo $data['Subject_Name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label for="">Faculty Name</label>
                <input type="text" name="Fac_name"  class="form-control">
                <label for="">Description</label>
                <input type="text" name="description" class="form-control input-lg">
                <button type="submit" name="submit" class="btn btn-primary text-center form-control my-2">SUBMIT</button>
            </form>
        </div>
    </div>

      <?php include "footnote.php"; ?>
<?php include "footer.php"; ?>