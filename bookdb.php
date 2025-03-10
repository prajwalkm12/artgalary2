<?php

 if(isset($_POST['pay']))
 {
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $date=$_POST['date'];
     $time=$_POST['time'];
     $filename=$_POST['filename'];
     $add=$_POST['add'];
      include 'dbconfig.php';
      $sql="insert into book(art_name, name,email,phone,date,time,address)values('$filename', '$name','$email','$phone','$date','$time','$add')";
      if($conn->query($sql))
      {
          echo "<script>alert('booking details upload')</script>";
          echo "<meta http-equiv='refresh' content='0;payment.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error adding user,please check phnumber')</script>";
          echo "<meta http-equiv='refresh' content='0;book.php'/>";
      }
      
          
      
 }else {
           echo "<meta http-equiv='refresh' content='0;book.php'/>";
     
}
 ?>


