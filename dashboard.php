<?php require_once('config.php'); ?>
<?php 

 if(isset($_SESSION['login_user'])) {
    
    $EnrollmentNo = $_SESSION['login_user'];
}
?>
<?php 
    include "header.php";?>
      <?php include "navbar.php"; ?>
           <div class="col-lg-12" style="margin-top:100px;">
               <div class=row>
                   <div class="col-lg-8">
                       <h1 class="page-header text-center">Home </h1>
                    <h2 class="text-center">Notice Board</h2>
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
                <a class="btn btn-primary form-control" href="NoticeBoard.php">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
             </div>
                   <div class="col-lg-4 text-center" style="margin-top:20px;"> 
                   <div class="well" style="height:700px;background-color:#376CA0;border-radius:4px;">
                  <h3 class="page-header">
                    <div id="notice">Welcome, <?php
                        $query = "SELECT * FROM PersonalDetails WHERE EnrollmentNo = '{$EnrollmentNo}' ";
    
                        $select_user_profile_query = mysqli_query($connection, $query);

                        while($data = mysqli_fetch_array($select_user_profile_query)) {

                            $user_name = $data['Name'];
                            $user_image = $data['Photo'];
                            $user_mail = $data['Gmail'];
                            $user_number = $data['Contact_No'];
                          }
                            echo $user_name;
                        ?>
                        </div>
                   </h3>
                   <br>
                   <br>
                    <center>
                   <img src="<?php echo $user_image; ?>" class="img-fluid">
                   </center>
                   <br>
                <hr>

              
            <table align="center" border="1px" style="width:90%; height:30%">
                    <tr>
                        <th colspan="4"><h4>Student Record</h4></th>
                    </tr>
                    <t>
                        <th>Enrollment Number</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                    
                      <tr>
                           <td><?php echo $EnrollmentNo; ?></td>
                           <td><?php echo $user_mail; ?></td>
                           <td><?php echo $user_number; ?></td>
                       </tr>
                   
                       </table>
                      <br>
                      <br>
                      <br>
                      <br>
                       <a href="xxx.php"><button type="button" class="btn btn-primary btn-lg btn-block my-2" style="margin-left:2px;margin-top:-60px;">Check Out Profile<span class="glyphicon glyphicon-chevron-right"></button></a>
                       </div>
                     <div class="well bg-dark vertical-scrollable">  
                      <br>
                       <div class="alert alert-danger" role="alert">
                          <h4 class="alert-heading">Covid-19!</h4>
                          <p>In view of the evolving situation on the spread of Novel Coronavirus(Covid-19),the advisories issued by WHO and Central government and as a matter of abundant precaution to check its spread, it has been decided that all educational institues will remain closed till further updates.</p>
                          <hr>
                           <p class="mb-0">Keep touch with the college website to further apprehend on the situation<a href="#" style="color:indianred;"><span class="glyphicon glyphicon-chevron-right"></a> </p>
                         </div>
                           <hr>
                           <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Covid-19!</h4>
                            <p>In view of the evolving situation on the spread of Novel Coronavirus(Covid-19),the advisories issued by WHO and Central government and as a matter of abundant precaution to check its spread, it has been decided that all educational institues will remain closed till further updates.</p>
                            <hr>
                           <p class="mb-0">Keep touch with the college website to further apprehend </a> </p>
                           <p class="mb-0">Keep touch with the college website to further apprehend on the situation <a href="#" style="color:green;"><span class="glyphicon glyphicon-chevron-right"></a> </p>
                    </div>
                    <div class="alert alert-danger" role="alert">
                          <h4 class="alert-heading">Covid-19!</h4>
                          <p>In view of the evolving situation on the spread of Novel Coronavirus(Covid-19),the advisories issued by WHO and Central government and as a matter of abundant precaution to check its spread, it has been decided that all educational institues will remain closed till further updates.</p>
                          <hr>
                           <p class="mb-0">Keep touch with the college website to further apprehend on the situation<a href="#" style="color:indianred;"><span class="glyphicon glyphicon-chevron-right"></a> </p>
                         </div>
                           <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Covid-19!</h4>
                            <p>In view of the evolving situation on the spread of Novel Coronavirus(Covid-19),the advisories issued by WHO and Central government and as a matter of abundant precaution to check its spread, it has been decided that all educational institues will remain closed till further updates.</p>
                            <hr>
                           <p class="mb-0">Keep touch with the college website to further apprehend </a> </p>
                           <p class="mb-0">Keep touch with the college website to further apprehend on the situation <a href="#" style="color:green;"><span class="glyphicon glyphicon-chevron-right"></a> </p>
                    </div>
                 </div>
                </div>  
               </div>
               <div id="about" class="container"  height= 6000px;>
         <h1><center>About Us</center></h1>
       
     
             <p><center>Education ERP system provides easy and quick access to information about students, staff , reporting and so on. This helps the management to consider and analyze various aspects of the institution faster, leading to growth in planning capabilities.
</center></p><br>
                     <p><center>The software can track real-time inventory and resource usage, enabling you to optimize operations, allocate and monitor all activities in the institution in a seamless manner.
</center></p><br>
                     <p><center>ERP solution integrates the whole campus and all the branches in a common system to make the process of data management easy.
</center></p><br>
                     <p><center>One of the most prominent advantages of ERP implementation in any sector including educational institutions is its cost-effectiveness. The software cuts down manual tasks involved in the fundamental methods of campus administration such as admission, student login, attendace and others to reduce the number of man-hours, resulted in saving of money. The expenditure spared can be used for imperative educational purposes.</center></p><br>
         </div>
              
                <br>
                 <hr>
                </div>
          
<?php include "footnote.php"; ?>
<?php include "footer.php"; ?>