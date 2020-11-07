<?php require_once('config.php'); ?>
<?php 

 if(isset($_SESSION['login_user'])) {
    
    $EnrollmentNo = $_SESSION['login_user'];
}

?>
<?php 
    include "header.php";?>
      <?php include "navbar.php"; ?>
      <div class="bg-light p-5" style="margin-top:150px;"> 
             <h1 class="text-center text-dark">Fee Details</h1>   
              <hr>
              <div class="container">
              <table class="table text-center">
  <thead>
    <tr class="text-primary">
      <th scope="col"><h4>Previous Balance (₹)</h4></th>
      <th scope="col"><h4>Academic Fees (₹)</th>
      <th scope="col"><h4>Hostel Fees (₹)</h4></th>
      <th scope="col"><h4>Other Fees (₹)</h4></th>
      <th scope="col"><h4>Total Fees (₹)</h4></th>
  </thead>
  <?php
  
  $query = "SELECT * FROM FeePayment WHERE EnrollmentNo = '{$EnrollmentNo}' ";
    
  $select_user_profile_query = mysqli_query($connection, $query);

  while($data = mysqli_fetch_array($select_user_profile_query)) {
  
  ?>
  <tbody>
    <tr>
      <td scope="row"><?php echo $data['Previous_Amount']; ?></td>
      <td><?php echo $data['Amount_To_Be_Paid']; ?></td>
      <td><?php echo $data['Hostel_Fee']; ?></td>
      <td><?php echo $data['Other_Fee']; ?></td>
      <td><?php echo $fees = ($data['Amount_To_Be_Paid']+$data['Hostel_Fee']+$data['Other_Fee'])-$data['Previous_Amount']; ?></td>
    </tr>
  </tbody>
  <?php
  }
  ?>
</table>
<div class=" bg-info pay-now text-center p-3 border border-dark" style="margin-top: 50px;">
  <form action="POST">
    <label for="Payment"><h2>Payable Ammount (₹)</h2></label><br>
    <input class="mt-2" type="number" value="<?php echo $fees+($fees*(18/100)); ?>" disabled="true"><br>
    <p>*Inclusive of all taxes</p>
    <button class="btn btn-warning mt-2">PAY NOW</button>
  </form>
</div>
              </div>
      </div>
      <?php include "footnote.php"; ?>
<?php include "footer.php"; ?>