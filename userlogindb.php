   <?php
if(isset($_POST['login']))
{
     
    $phno=$_POST['phno'];
    $password=$_POST['password'];
    include 'dbconfig.php';
    $sql="select * from user where phno='$phno' and password='$password';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    { 
        session_start();
        $_SESSION['uname']=$phno;
          
        //echo "<script>alert('login successfully')</script>";
        echo "<meta http-equiv='refresh' content='0;userhome.php'/>";
    }
    else
    {
     echo "<script>alert('invalid username or password')</script>";

     echo "<meta http-equiv='refresh' content='0;userlogin.php'/>";
    }
}
else
{

    echo "<meta http-equiv='refresh' content='0;userlogin.php'/>";
}
 ?>

