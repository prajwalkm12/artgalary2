 <?php

 if(isset($_POST['reg']))
 {
     $fname=$_POST['Firstname'];
     $lname=$_POST['Lastname'];
     $email=$_POST['Email'];
     $phno=$_POST['phno'];

     $password=$_POST['Password'];
     $repass=$_POST['CP'];
     
     if($password==$repass)
     {
      include 'dbconfig.php';
      $sql="insert into user(fname,lname,email,phno,password)values('$fname','$lname','$email','$phno', '$password')";
      if($conn->query($sql))
      {
          echo "<script>alert('registration successfull')</script>";
          echo "<meta http-equiv='refresh' content='0;userlogin.php'/>";
              
          
      }
      else{
          echo "<script>alert(' error adding user,please check phnumber')</script>";
          echo "<meta http-equiv='refresh' content='0;userreg.php'/>";
          
      }
     }
     else{
         echo "<script>alert(' password missmatch')</script>";
          echo "<meta http-equiv='refresh' content='0;userreg.php'/>";         
     }
             
 }
 else {
           echo "<meta http-equiv='refresh' content='0;userregister.php'/>";
     
}
 ?>
