<?php
 
      
require 'dbconfig.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_POST['add'])) {
    $filen = $_POST['artname'];
    $file = $_FILES['uifile'];
    $descr = $_POST['desc'];
    $price = $_POST['price'];

    $filen = mysqli_real_escape_string($conn, $filen);
    $descr = mysqli_real_escape_string($conn, $descr);
    $price = mysqli_real_escape_string($conn, $price);
    session_start();
    $aid=$_SESSION['uname'];

    $targetDir = "./uifiles/";
    $targetFile = $targetDir . basename($file["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($file["tmp_name"]);
    if ($check === false) {
        echo "<script>alert('File is not an image.')</script>";
        $uploadOk = 0;
    }

    if ($file["size"] > 5000000) {
        echo "<script>alert('Sorry, your file is too large.')</script>";
        $uploadOk = 0;
    }

    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
        echo "<meta http-equiv='refresh' content='0;addart.php'/>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.')</script>";
        echo "<meta http-equiv='refresh' content='0;addart.php'/>";
    } else {
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            $sql = "INSERT INTO addart (aid,filename, file, description, price) VALUES ('$aid','$filen', '$targetFile', '$descr', '$price')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Upload successful')</script>";
                echo "<meta http-equiv='refresh' content='0;userhome.php'/>";
            } else {
                echo "<script>alert('Error: Could not upload art')</script>";
                echo "<meta http-equiv='refresh' content='0;addart.php'/>";
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    }
} else {
    echo "<script>alert('Error')</script>";
    echo "<meta http-equiv='refresh' content='0;addart.php'/>";
}

?>