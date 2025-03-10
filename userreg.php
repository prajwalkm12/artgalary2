<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .login-container input[type="button"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #007bff;
            border: none;
            border-radius: 3px;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container input[type="button"]:hover {
            background-color: #0056b3;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* ===== COLOR VARIABLES ===== */

:root{
    --primary-color: #6657f4;
    --second-color: #ffffff; 
    --black-color: #000000;
}

/* ===== BODY - BACKGROUND IMAGE ===== */

body{
    
    background: #9a90f5;
}


/* ===== Reusable CSS ===== */

a{
    text-decoration: none;
    color: var(--second-color);
}
a:hover{
    text-decoration: underline;

}


/* ===== WRAPPER ===== */

.wrapper{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: rgba(0,0,0,0.2);
}

.login-box{
    position: relative;
    width: 450px;
    border: 3px solid var(--primary-color);
    border-radius: 15px;
    padding: 7.5em 2.5em 4em 2.5em;
    background-color: #ffffff;
    box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
}

.login-header{
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:var(--primary-color);
    width: 140px;
    height: 70px;
    border-radius: 0 0 20px 20px ;
}

.login-header span {
    font-size: 30px;
    color: var(--black-color);
}

.login-header::before{
    content: "";
    position: absolute;
    top: 0;
    left: -30px; 
    width: 30px;
    height: 30px;
    border-top-right-radius: 50%;
    background: transparent;
    box-shadow: 15px 0 0 0 var(--primary-color);
}

.login-header::after{
    content: "";
    position: absolute;
    top: 0;
    right: -30px; 
    width: 30px;
    height: 30px;
    border-top-left-radius: 50%;
    background: transparent;
    box-shadow: -15px 0 0 0 var(--primary-color);
}

.input_box{
    position: relative;
    display: flex;
    flex-direction: column;
    margin: 20px 0;
}

.input-field{
    width: 100%;
    height: 55px;
    font-size: 16px;
    background: transparent;
    color: #000000;
    padding-inline: 20px 50px;
    border: 2px solid var(--primary-color);
    border-radius: 30px;
    outline: none;
}

#user{
    margin-bottom: 10px;
}

.label{
    position: absolute;
    top: 15px;
    left: 20px;
    transition: .2s ease-in-out;
}

.input-field:focus ~ .label,
.input-field:valid ~ .label{
    position: absolute;
    top: -10px;
    left: 20px;
    font-size: 14px;
    background-color: var(--primary-color);
    border-radius: 30px;
    color: black;
    padding: 0 10px;

}

.icon{
    position: absolute;
    top: 18px;
    right: 25px;
    font-size: 20px;
}

.remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 15px;
}

.input-submit{
    width: 100%;
    height: 50px;
    background: #6657f4;
    font-size: 16px;
    font-weight: 500;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: .3s ease-in-out;
}

.input-submit:hover{
    background: #1d0db2;
}

.register{
    text-align: center;
}

.register a{
    font-weight: 500;
}

a{
    color: #6657f4;
}

@media only screen and (max-width: 564px) {
    .wrapper{
        padding: 20px;
    }
    .login-box{
        padding: 7.5em 1.5em 4em 2.5em;
    }
}
  

    </style>
</head>

<body>

    <form method="POST" action="userregisterphp.php" onsubmit="return validate()">
    <div class="wrapper">
      <div class="login-box">
        <div class="login-header">
        <a class="active" href="index.php">back</a>
   
         <h2>signUp</h2>
        </div>
        <div class="input_box">
        <input type="text"id="Firstname" name="Firstname" class="input-field" >
        <label for="user" class="label">First Name</label>
          <i class="bx bx-user icon"></i>
          </div>
        <div class="input_box">
        <input type="text"id="Lastname" name="Lastname" class="input-field" >
        <label for="user" class="label">Last Name</label>
          <i class="bx bx-user icon"></i>
          </div>
        <div class="input_box">
        <input type="Email"id="Email" name="Email" class="input-field" >
        <label for="user" class="label">Email</label>
          <i class="bx bx-user icon"></i>
          </div>
        <div class="input_box">
        <input type="number" id="phno"name="phno" class="input-field">
        <label for="user" class="label">Phone Number</label>
          <i class="bx bx-user icon"></i>
          </div>
        <div class="input_box">
        <input type="password" id="Password"name="Password" class="input-field">
        <label for="user" class="label">Password</label>
          <i class="bx bx-lock-alt icon"></i>
          </div>
        <div class="input_box">
        <input type="password" id="CP"name="CP" class="input-field">
        <label for="user" class="label">Confirm Password</label>
          <i class="bx bx-lock-alt icon"></i>
          </div>
        
        <div class="input_box">
        <input type="submit" value="SignUp " name="reg" class="input-submit">
        </div>
        
        <center> <p>Already have an account? <a href="userlogin.php" class="LoginBtn-link">Login</a></p></center>
    </div>
    </div>
</form>
        
           
</body>
<script>
    function validateFirstName(name) {
        const firstNameRegex = /^[a-zA-Z]{3,30}( [a-zA-Z]{3,30})*$/;
        return firstNameRegex.test(name)
    }
    function validateLastName(name) {
        const lastNameRegex = /^[a-zA-Z]{3,30}$/;
        return lastNameRegex.test(name)
    }
    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email)
    }
    function validatePassword(Password) {
        // Minimum eight characters, at least one letter, one number and one special character:
        const passwordRegex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
        return passwordRegex.test(Password);
    }




    function validate() {

        var firstname = document.getElementById("Firstname").value
        var lastname = document.getElementById("Lastname").value
        var email = document.getElementById("Email").value
        var phno = document.getElementById("phno").value
        var password = document.getElementById("Password").value
        var CP = document.getElementById("CP").value



        if (!validateFirstName(firstname)) {
            alert("Enter valid First name")
            return false
        } else if (!validateLastName(lastname)) {
            alert("Enter valid Last name")
            return false
        } else if (!validateEmail(email)) {
            alert("Enter valid email")
            return false
        }
        var phonePattern = /^[0-9]{10}$/; // Assumes a 10-digit numeric phone number
        if (!phonePattern.test(phno)) {
            alert("Invalid phone number. Please enter a 10-digit number.");
            return false;
        }

        if (!validatePassword(password)) {
            alert("Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
            return false
        }

        if (password != CP) {
            alert("Password didnt match!")
            return false
        }
        return true
    }
</script>

</html>
