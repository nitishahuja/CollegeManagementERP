<?php require_once('config.php'); ?>
<?php

   if(isset($_SESSION['login_user'])) {
    
    $EnrollmentNo = $_SESSION['login_user'];
    $query = "SELECT * FROM AttendanceDetails WHERE EnrollmentNo = '{$EnrollmentNo}' ";
  $select_user_profile_query = mysqli_query($connection, $query);   
  while($data = mysqli_fetch_array($select_user_profile_query)){
    $Deets[] = $data['Subject_Name'];
    echo($Deets);
  }
}

?>
<?php 
    include "header.php";?>
      <?php include "navbar.php"; ?>
      <div class="container text-center">
     <table class="table text-center">
        <h1 style="margin-top: 150px;">Academic Details</h1>
   <thead>
    <tr class="text-primary">
      <th scope="col"><h4>Course Name</h4></th>
      <th scope="col"><h4>Current Year</th>
      <th scope="col"><h4>Current Semister</th>
      <th scope="col"><h4>CGPA</h4></th>
      <th scope="col"><h4>Pending Backlogs</h4></th>
    </tr>
  </thead>
  <?php

$query = "SELECT * FROM Academic_Details WHERE EnrollmentNo = '{$EnrollmentNo}' ";
$select_user_profile_query = mysqli_query($connection, $query);
  while($data = mysqli_fetch_array($select_user_profile_query)){
     
     ?>
<tbody>
<tr>
<th scope="row"><?php echo $data['Course_Name']; ?></th>
<td><?php echo $data['OngoingYear']; ?></td>
<td><?php echo $data['OngoingSemester']; ?></td>
<td><?php echo $data['Overall_CGPA']; ?></td>
<td><?php echo $data['Backlogs']; ?></td>
</tr>
</tbody>
<?php
         }
           ?>
    </tr>
  </tbody>
</table>
<table class="table text-center">
<h1 style="margin-top: 150px;">Course Details</h1>
<thead>
    <tr class="text-primary">
      <th scope="col"><h4>Subject Name</h4></th>
      <th scope="col"><h4>Subject Code</th>
      <th scope="col"><h4>Attempted Credit</th>
      <th scope="col"><h4>Earned Credit</h4></th>
      <th scope="col"><h4>Graded Credit</h4></th>
    </tr>
  </thead>
  <?php
   $query1 = "SELECT * FROM AttendanceDetails WHERE EnrollmentNo = '{$EnrollmentNo}' ";
   $select_user_profile_query1 = mysqli_query($connection, $query1);   
   while($data = mysqli_fetch_array($select_user_profile_query1)){
    $query2 = "SELECT * FROM SubjectDetails WHERE Subject_Name = '{$data['Subject_Name']}'";
    $select_user_profile_query2 = mysqli_query($connection, $query2);
    while($SubDetail = mysqli_fetch_array($select_user_profile_query2)){
     ?>
<tbody>
<tr>
<th scope="row"><?php echo $SubDetail['Subject_Name']; ?></th>
<td><?php echo $SubDetail['Subject_Code']; ?></td>
<td><?php echo $SubDetail['Attempted_Credit']; ?></td>
<td><?php echo $SubDetail['Earned_Credit']; ?></td>
<td><?php echo $SubDetail['Graded_Credit']; ?></td>
</tr>
</tbody>
     <?php 
    }
  }
  ?>
</table>
        </div>
        <?php include "footnote.php"; ?>
<?php include "footer.php"; ?>