<html>
<head>
<title>  login form  </title>
<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
    <div  class="container">
     <div class="login-box">
        
        
        <h1>Login Here</h1>
        <form action="login_submit.php" method="POST">
            <div class="input-box">
            <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username">
            </div>
            <div class="input-box">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password"><br><br>
           </div>
            <input type="Submit" name="login" value="Login" onclick="location.href='home3.php';"><br>
           
             
          </form> 
        
      </div>
  </div>
    </body>
</html>