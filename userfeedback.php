<!DOCTYPE html>
<html>
<head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #66b4db;
}
.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 600px;
  width: 200%;
  background: #fff;
  border-radius: 7px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
}
#check:checked ~ .login{
  display: none;
}
#check{
  display: none;
}
.container .form{
  padding: 2rem;
}
.form header{
  font-size: 2rem;
  font-weight: 500;
  text-align: center;
  margin-bottom: 1.5rem;
}
 .form input{
   height: 60px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #66b4db;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
  color: #66b4db;
}
.form input.button{
  color: #fff;
  background: #66b4db;
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 1px;
  margin-top: 1.7rem;
  cursor: pointer;
  transition: 0.4s;
}
.form input.button:hover{
  background: #1d5c7c;
}
.signup{
  font-size: 17px;
  text-align: center;
}
.signup label{
  color: #66b4db;
  cursor: pointer;
}
.signup label:hover{
  text-decoration: underline;
  color: #1d5c7c;
}
</style>
    </head>
<body>
       <?php
include 'dbconfig.php';

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>

    
<h2>All Feedbacks</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Satisfaction</th>
        <th>Suggestion</th>
        <th>Rating</th>
        
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['satisfaction'] . "</td>
                    <td>" . $row['suggestion'] . "</td>
                    <td>" . $row['ratings'] . "</td>
                    
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No feedbacks found</td></tr>";
    }
    $conn->close();
    ?>
</table>
<a href="adminhome.php" class="split"> 
      <input type="button" class="button" value="Back"> </a>
</body>
</html>