  <?php
if(isset($_get['login']))
{
    $uname=$_get['username'];
    $password=$_get['password'];
    include 'dbconfig.php';
    $sql="select * from admin where Username='$uname' and Password='$password';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        echo "<script>alert('login successfully')</script>";
        echo "<meta http-equiv='refresh' content='0;adminhome.php'/>";
    }
    else
    {
     echo "<script>alert('invalid username or password')</script>";

     echo "<meta http-equiv='refresh' content='0;adminlogin.php'/>";
    }
}
else
{

    echo "<meta http-equiv='refresh' content='0;login.php'/>";
}
 ?>

