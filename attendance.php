<?php require_once('config.php'); ?>
<?php

   if(isset($_SESSION['login_user'])) {
    
    $EnrollmentNo = $_SESSION['login_user'];
}

?>
<?php include "header.php" ?>
         <?php include "navbar.php"; ?>
         <div class="container text-center">
     <table class="table">
        <h1 style="margin-top: 150px;">Attendance Details</h1>
   <thead>
    <tr class="text-primary">
      <th scope="col"><h4>Subject Name</h4></th>
      <th scope="col"><h4>Total Sessions Held</th>
      <th scope="col"><h4>Total Unexcused Absences</h4></th>
      <th scope="col"><h4>Attendance Percentage(%)</h4></th>
    </tr>
  </thead>
           <?php

         $query = "SELECT * FROM AttendanceDetails WHERE EnrollmentNo = '{$EnrollmentNo}' ";
         $select_user_profile_query = mysqli_query($connection, $query);
           while($data = mysqli_fetch_array($select_user_profile_query)){
              
              ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $data['Subject_Name']; ?></th>
      <td><?php echo $data['Total_Sessions_Held']; ?></td>
      <td><?php echo $data['Total_Absent']; ?></td>
      <td><?php $percentage = (($data['Total_Sessions_Held']-$data['Total_Absent'])/$data['Total_Sessions_Held'])*100;
      if ($percentage<75){
        ?>
        <div class="text-danger">
          <?php echo "$percentage%"; ?>
        </div>
        <?php 
      }
      else{
        ?>
        <div class="text-success">
          <?php echo "$percentage%";?>
        </div>
        <?php
      }
      ?></td>
<?php
         }
           ?>
    </tr>
  </tbody>
</table>
<div class="warning" style="margin-top: 250px;">
<div class="text-warning">
  <h4>Attendance Below 75% may lead to debar in the concerned subjects during final examinations</h4>
</div>
</div>
 </div>
 <?php include "footnote.php"; ?>
<?php include "footer.php"; ?>
        
         
        
    