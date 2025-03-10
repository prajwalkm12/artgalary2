


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Booking</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'nunito', sans-serif;
    font-weight: 600;
}
body{
    background-color: #91908c;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 110vh;
    position: relative;
}
.box{
    width: 550px;
    height: 900px;
    background: #fff;
    backdrop-filter: blur(20px);
    border-radius: 30px;
    padding: 40px;
    box-shadow: 2px 2px 15px 2px rgba(0,0,0,0.1),
                -2px -0px 15px 2px rgba(0,0,0,0.1);
    z-index: 10;
}
.wrapper{
    position: absolute;
    width: 455px;
    height: 500px;
    border-radius: 30px;
    background: rgba(255,255,255,0.53);
    box-shadow: 2px 2px 15px 2px rgba(0,0,0,0.115),
                -2px -0px 15px 2px rgba(0,0,0,0.054);
    transform: rotate(5deg);
}
.header{
    margin-bottom: 50px;
}
.header header{
    display: flex;
    justify-content: right;
}
header img{
    width: 25px;
}
.header p{
    font-size: 25px;
    font-weight: 800;
    margin-top: 10px;
}
.input-box{
    display: flex;
    flex-direction: column;
    margin: 10px 0;
    position: relative;
}
i{
    font-size: 22px;
    position: absolute;
    top: 35px;
    right: 12px;
    color: #595b5e;
}
input{
    height: 40px;
    border: 2px solid rgb(153,157,158);
    border-radius: 7px;
    margin: 7px 0;
    outline: none;
}
.input-field{
    font-weight: 500;
    padding: 0 10px;
    font-size: 17px;
    color: #333;
    background: transparent;
    transition: all .3s ease-in-out;
}
.input-field:focus{
    border:2px solid rgb(89,53,180);
}
.input-field:focus ~ i{
    color: rgb(89,53,180);
}
.input-submit{
    margin-top: 20px;
    background: #1e263a;
    border: none;
    color: #fff;
    cursor: pointer;
    transition: all .3s ease-in-out;
}
.input-submit:hover{
    background: #122b71;
}
.bottom{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 25px;
}
.bottom span a{
    color: #727374;
    text-decoration: none;
}
.bottom span a:hover{
    text-decoration: underline;
}
    </style>
</head>
<body>

    <?php
     include 'dbconfig.php';
	 session_start();
     $aid = $_SESSION['uname'];
	 $phno = $aid;
	 
     $filename=$_GET['file'];
 
  $sql="SELECT * FROM `addart` where filename='$filename' LIMIT 0, 1";
    
     $result=$conn->query($sql);
    if($result->num_rows>0)
    {
		$row = $result->fetch_assoc();
		$amt=$row['price'];
    }
	
	

	
	




    
    ?>  
    

    <form action="bookdb.php" method="POST">
        
        <div class="container">
       <div class="box">
         <div class="header">
            <center><h1>Art Booking</h1></center>
         </div>
      <div class="input-box">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="input-field" required>
      </div>
      <div class="input-box">  
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="input-field" required>
      </div>
       
        
        <input type="HIDDEN" id="phone" name="phone" value = "<?php echo $phno; ?>">
      
      <div class="input-box">  
        <label for="date">Booking Date:</label>
        <input type="date" id="date" name="date" class="input-field" required>
      </div>
      <div class="input-box">  
	  <label for="filename">Product Name:</label>
        <input type="text" id="filename" name="filename" value="<?php echo $filename; ?>" required readonly>
</div>
      <div class="input-box">  
        <label for="time">Booking Time:</label>
        <input type="time" id="time" name="time" class="input-field" required>
      </div>
        <div class="input-box">
        <label for="deliveryAddress">Delivery Address:</label>
            <textarea id="deliveryAddress" name="add" rows="2" class="input-field" required></textarea>
        </div>
        
        <div class="input-box">
        <label for="amount">Amount:</label>
        <input type="text" id="amount" class="input-field" name="amount" value="<?php echo $amt; ?>" required>
        </div>
        <div class="input-box">
        <input type="submit" value="Pay Now" name="pay" class="input-submit">
        </div>
      </div>
     </div>
    </form>
</body>

</html>

