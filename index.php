<!DOCTYPE html>
<html>

<head>
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #111;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .dropdown:hover .dropbtn {
      background-color: red;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
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

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: white;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .container {
      width: 80%;
      font-family: ariel sans-serif;
      margin: auto;
      color: white;
      overflow: hidden;
      padding: 20px;
      font-size: 20px;
      text-shadow: 3px 3px 5px rgba(white)
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-gap: 20px;
    }

    .gallery img {
      width: 20%;
      height: auto;
      display: block;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .gallery img:hover {
      transform: scale(1.05);
    }

    footer {
      position: fixed;
      left: 30%;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body style="background-image:url('Home.jpeg');">
  <ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="adminlogin.php">admin</a></li>
    <div class="dropdown">
      <button class="dropbtn">user
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="userreg.php">register</a>
        <a href="userlogin.php">login</a>
      </div>
    </div>
  </ul>

  <header>
        <div class="container">
          <center>
            <h1>WELCOME TO OUR ART GALLERY</h1>
            <h5>"--Embracing The Power Of Creativity"<h5><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h5>&copy; 2024 Art Gallery. All rights reserved.</h5>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <h6>About:<br> <a class="fa fa-instagram" >&nbsp;yashwanth_karadi</a>
            <a class="fa fa-whatsapp">&nbsp;8088334472</a>
            <a class="fa fa-mobile">&nbsp;8088334472</a></h6>
            
            
      </center>
        </div>
    </header>
  <main>
    <div class="container">
      <div class="gallery">



      </div>
    </div>
  </main>
  <footer>
    <div class="container">

      
    </div>
  </footer>

</body>

</html>