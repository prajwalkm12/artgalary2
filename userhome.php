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
  float: left;
  list-style-type: none;
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

nav button{
	height: 30px;
}

        /* Basic CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
          color:white;
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 30px;
        }
        .gallery img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
        .blink{
  animation:blinker 1.5s linear infinite;
  color:red;
  font-family:sans-serif;
}
@keyframes blinker{
  50%{
    opacity:0;
  }
}
</style>
</head>
<body style="background-image:url('userhome.jfif');">

<nav>
	<ul>
  <li><a class="active" href="userhome.php">Home</a></li>
  <li><a href="artcollection.php">Arts</a></li>
  <li><a href="addart.php">SellArt</a></li>
  
  <li><a href="customer.php">User profile</a></li>
  <li><a href="myorder.php">My Orders</a></li>
  <li><a href="feedback.php">Feedback</a></li>
   </ul> 
   <form action="logout.php" method="post">
    <input type="submit" value="Logout">
      </nav>
      </form>

    
    <header>
        <div class="container">
           <marquee class="blink"> <h1>Recently Viewed</h1></marquee>
        </div>
    </header>
    <main>
    
   <!--marquee width="60%" direction="dowm" height="100px"--> <div class="container">
            <div class="gallery">
                <img src="recent1.jfif" alt="Artwork 1">
                <img src="recent2.jfif" alt="Artwork 2">
                <img src="recent3.jfif" alt="Artwork 3">
                <img src="recent4.jfif" alt="Artwork 4"><!--/marquee-->
                <!-- Add more images as needed -->
            </div>
        </div>
    </main>

    <header>
        <div class="container">
            <h1>Trending Arts</h1>
        </div>
    </header>
    <main>
    
        <div class="container">
            <div class="gallery">
                <img src="trending1.jfif" alt="Artwork 1">
                <img src="trending2.jfif" alt="Artwork 2">
                <img src="trending3.jfif" alt="Artwork 3">
                <img src="trending4.jfif" alt="Artwork 4">
                <!-- Add more images as needed -->
            </div>
        </div>
    </main>

    
        <div class="container">
            <h1>Pencil Arts</h1>
        </div>
    </header>

    
        <div class="container">
            <div class="gallery">
                <img src="pencil1.jfif" alt="Artwork 1">
                <img src="pencil2.jfif" alt="Artwork 2">
                <img src="pencil3.jfif" alt="Artwork 3">
                <img src="pencil4.jfif" alt="Artwork 4">
                <!-- Add more images as needed -->
            </div>
        </div>
   


    <header>
        <div class="container">
            <h1>Painting Arts</h1>
        </div>
    </header>
    <main>
    
        <div class="container">
            <div class="gallery">
                <img src="paint1.jfif" alt="Artwork 1">
                <img src="paint2.jfif" alt="Artwork 2">
                <img src="paint3.jfif" alt="Artwork 3">
                <img src="paint4.jfif" alt="Artwork 4">
                <!-- Add more images as needed -->
            </div>
        </div>
    </main>


    <header>
        <div class="container">
            <h1>Nature Arts</h1>
        </div>
    </header>
    <main>
    
        <div class="container">
            <div class="gallery">
                <img src="nature1.jfif" alt="Artwork 1">
                <img src="nature2.jfif" alt="Artwork 2">
                <img src="nature3.jfif" alt="Artwork 3">
                <img src="nature4.jfif" alt="Artwork 4">
                <!-- Add more images as needed -->
            </div>
        </div>
    </main>

	</form>
 

</body>
</html>



