<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="reg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="register_student.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Student Name</span>
            <input type="text" name="sname" placeholder="Enter your Name" required>
          </div>
          <div class="input-box">
            <span class="details">Email ID</span>
            <input type="text" name="email" placeholder="Enter your Email ID" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="mobile" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Course</span>
            <select name="course">  
                <option value="blank">Select Course</option>  
                <option value="Diploma in IT Engineering">Diploma in IT Engineering</option>  
                <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>  
                <option value="Diploma in Electronic Engineering">Diploma in Electronic Engineering</option>  
                <option value="Diploma in Computer Engineering">Diploma in Computer Engineering</option>  
                <option value="Diploma in Automobile Engineering">Diploma in Automobile Engineering</option>  
                </select>
          </div>
          <div class="input-box">
            <span class="details">Semester</span>
            <select name="sem">  
                <option value="blank">Select Semester</option>  
                <option value="Sem I">Sem I</option>
                <option value="Sem II">Sem II</option>
                <option value="Sem III">Sem III</option>
                <option value="Sem IV">Sem IV</option>
                <option value="Sem V">Sem V</option>
                <option value="Sem VI">Sem VI</option>  
                </select>
          </div>
          
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="uname" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pwd" placeholder="Enter your password" required>
          </div>
        </div>
         
        <div class="button">
          <input   onclick="location.href='login3.php';"type="Submit" value="Register">
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>
