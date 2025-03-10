   <!DOCTYPE html>
<html>
    <head>
<style>
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 4px 12px;
  background-color: #333;
}

nav li {
	list-style-type: none;
  float: left;
}

.navRight{
  display: flex;
}

.navRight div{
  color: #fff;
  margin-right: 1rem;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>

<?php
                include 'dbconfig.php';

                $sql = "SELECT COUNT(*) as num FROM user";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
?>
 
<body style="background-image:url('admin.jpeg');">
<nav>
	<ul>
  <li><a class="active" href="index.php">Home</a></li>
   <li><a class="active" href="adminartist.php">view artist</a></li> 
   <li><a class="active" href="userfeedback.php">Users FeedBacks</a></li>
    </ul> 

    <div class="navRight">

    <div>No of Users: <span><?php echo $row["num"];?></span></div>

    
	<form action="logout.php" method="post">
    <input type="submit" value="Logout">
	</form>
  </div>
</nav>

</body>
</html>

 
