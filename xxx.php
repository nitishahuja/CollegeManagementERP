<?php require_once('config.php'); ?>
<?php

   if(isset($_SESSION['login_user'])) {
    
    $EnrollmentNo = $_SESSION['login_user'];
   
    $query = "SELECT * FROM PersonalDetails WHERE EnrollmentNo = '{$EnrollmentNo}' ";
    
    $select_user_profile_query = mysqli_query($connection, $query);

    while($data = mysqli_fetch_array($select_user_profile_query)) {
    $user_name = $data['Name'];
    $father_name = $data['Father_Name'];
    $mother_name = $data['Mother_Name'];
    $address = $data['Address'];
    $user_mail = $data['Gmail'];
    $user_number = $data['Contact_No'];
    }
}
  
    ?>
<?php 
    include "header.php";?>
         <?php include"navbar.php"; ?>
          <div style="margin-top:150px;"> 
             <h1 class="text-center text-dark">Student Information</h1>   
              <hr>
              <div class="container">
              <table class="table">
  <thead>
    <tr class="text-primary">
      <th scope="col"><h4>Enrollement Number</h4></th>
      <th scope="col"><h4>Student's Name</th>
      <th scope="col"><h4>Father's Name</h4></th>
      <th scope="col"><h4>Mother's Name</h4></th>
      <th scope="col"><h4>Address</h4></th>
      <th scope="col"><h4>Email Id</h4></th>
      <th scope="col"><h4>Contact Number</h4></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $EnrollmentNo; ?></th>
      <td><?php echo $user_name; ?></td>
      <td><?php echo $father_name; ?></td>
      <td><?php echo $mother_name; ?></td>
      <td><?php echo $address; ?></td>
      <td><?php echo $user_mail; ?></td>
      <td><?php echo $user_number; ?></td>
    </tr>
  </tbody>
</table>
              </div>
      </div>

      <?php include "footnote.php"; ?>
<?php include "footer.php"; ?>