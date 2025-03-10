<?php

 if(isset($_POST['sub']))
 {
     $satisfy=$_POST['satisfy'];
     $sugg=$_POST['suggession'];
     $rating=$_POST['rating'];
      
     
      include 'dbconfig.php';
      $sql="insert into feedback(satisfaction,suggestion,ratings)values('$satisfy',' $sugg','$rating')";
      
       if($conn->query($sql))
      {
          echo "<script>alert('Thankyou for your feedback')</script>";
         echo "<meta http-equiv='refresh' content='0;userhome.php'/>";
              
          
      }
      else{
          echo "<script>alert('error')</script>";
          echo "<meta http-equiv='refresh' content='0;userfeedback.php'/>";
          
      }
     
 }
 
 ?>