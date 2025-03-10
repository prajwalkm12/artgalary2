<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="userstyle.css"/>
        <link rel="stylesheet" href="style.css"/>
                <link rel="style1" href="style.css"/>


    
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    h2{
         text-align: center;
     color:#008B8B;

     font-family:serif;
    font-size:30px;
     
     }
 textarea {
  width: 100%;
  height: 180px;
  padding: 12px 20px;
    border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
B{
    text-align:center;
}
input[type=submit]{
     background-color:#008080;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.container{
      
    background-color: #008b8b;
}
body{
        background-color:#fafad2;

}
label{
        color: #f0fff0;

}
.topnav a.split {
  float: left;
  background-color: #04AA6D;
  color: white;
}
.rating {
  display: inline-block;
  unicode-bidi: bidi-override;
  direction: rtl;
}

.rating input {
  display: none;
}

.rating label {
  float: right;
  cursor: pointer;
  color: #8b0000;
  font-size: 50px; /* Adjust the size of the stars */
  border: none; /* Remove any border */
}

.rating label:before {
  content: '★';
  
  margin: 5px;
}

.rating input:checked ~ label {
  color: orange;
}

</style>
    </head>
<body>
       
	   <a href="userhome.php" class="split"> Back </a>
	 <?php
include 'dbconfig.php';
session_start();
$aid = $_SESSION['uname'];

$sql = "SELECT * FROM book WHERE phone = '$aid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Full Information</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>Address</th>
            <th>Filename</th>
            <th>Price</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $date = $row['date'];
        $time = $row['time'];
        $add = $row['address'];
        $filename = $row['art_name'];

        
        $price_sql = "SELECT price FROM addart WHERE filename='$filename' LIMIT 0, 1";
        $price_result = $conn->query($price_sql);
        $price = ($price_result->num_rows > 0) ? $price_result->fetch_assoc()['price'] : 'N/A';

        
        echo "<tr>
                <td>$name</td>
                <td>$email</td>
                <td>$phone</td>
                <td>$date</td>
                <td>$time</td>
                <td>$add</td>
                <td>$filename</td>
                <td>$price</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No records found.</p>";
}
?>

  

        
  
   

 

</body>
</html>