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
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f4f4f4;
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 18px;
    text-align: left;
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.styled-table th, .styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
    </style>
</head>

<body>
    <ul>
        <li><a class="active" href="userhome.php">Home</a></li>
    </ul>

    <center>
        <table id="customers" style="width:60%">
            <h1>artist details<h1><br>
            <table class="styled-table">
    <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
    </thead>
            <?php
                include 'dbconfig.php';
                session_start();
                $aid = $_SESSION['uname'];

                // Check if the aid exists in the addart table first
                $sql1 = "SELECT DISTINCT * FROM addart WHERE aid='$aid'";
                $result1 = $conn->query($sql1);

                if ($result1->num_rows > 0) {
                    // If aid exists in the addart table, fetch the corresponding user details from the user table
                    $sql = "SELECT * FROM user WHERE phno='$aid'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $email = $row['email'];
                        $phno = $row['phno'];

                        echo "<tr><td>$fname</td>";
                        echo "<td>$lname</td>";
                        echo "<td>$email</td>";
                        echo "<td>$phno</td></tr>";
                        
                    } else {
                        echo "<tr><td colspan='5'>User not found</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Not artist yet</td></tr>";
                }
            ?>
			<form action="userhome.php">
                          <button type="submit">Back</button>
                          </form>   
                  
        </table>
    </center>
</body>
</html>