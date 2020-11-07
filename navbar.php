<?php require_once('config.php'); ?>
 <?php
   if(isset($_SESSION['login_user'])) {
     $username = $_SESSION['login_user'];
   }
?>
<?php include "header.php";?>
<nav class="navbar fixed-top">
     <div class="topbar">
       <a href="dashboard.php"><img src="./assets/images/majorProjectLogo.png"></a>
         <ul class="primary-nav">
           <?php
               $query = "SELECT * FROM categories";
               $select_all_categories_query = mysqli_query($connection,$query);                     $titles = array();
                 while($row = mysqli_fetch_assoc($select_all_categories_query))
                   {
                     $titles[]=$row['cat_title'];
                   } 
                 foreach( $titles as $title)
                   {
                     if($title =='Fee Payment')
                       {
                         ?>
                           <li class="menu-item"><a href="Fee.php"><?php echo $title; ?></a></li>   
                         <?php
                       }
                       else if($title=='Notice Board')
                         {
                           ?>
                             <li class="menu-item"><a href="NoticeBoard.php"><?php echo $title; ?></a></li> 
                           <?php  
                         }
                         else if($title=='Attendance')
                           {
                             ?>
                               <li class="menu-item"><a href="attendance.php"><?php echo $title; ?></a></li>
                              <?php   
                           }
                         else if($title=='Academics')
                           {
                             ?>
                               <li><a href="academics.php"><?php echo $title; ?></a></li>
                             <?php    
                           }
                         else
                           {
                             ?>
                               <li><a href="#"><?php echo $title; ?></a></li>  
                             <?php         
                           } 
                     } 
                ?>
             </ul>
        </div>
      </div>
    </nav>
  </header>
<?php include "footer.php"; ?>
   