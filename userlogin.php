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


<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="adminlogin.php">admin</a></li>
   <li><a href="userreg.php">user</a></li>
</ul><br><br><br>
<body>

<form method="POST" action="userlogindb.php">
    <div class="wrapper">
      <div class="login-box">
        <div class="login-header">
        <h2>Login</h2>
        </div>
         
        <div class="input_box">
        <input type="Phonenumber" name="phno" class="input-field"required/><br>
        <label for="user" class="label">Phonenumber</label>
          <i class="bx bx-user icon"></i>
          </div>
        <div class="input_box">
        <input type="password" name="password" class="input-field" required/><br>
        <label for="user" class="label">Password</label>
          <i class="bx bx-lock-alt icon"></i>
          </div>

        <a href="/artgalary/forgot_password.php">Forgot Password</a>

        <div class="input_box">    
        <input type=submit name="login"  class="input-submit" value="login"/>
        </div>
      </div>
    </div>
        </form>


</body>
</html>


