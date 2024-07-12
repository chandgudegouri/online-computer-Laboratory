<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="profile.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Profile</div>
    <div class="content">
    <form action=" profile_update.php" method="POST">
        <div class="user-details">
         
        <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required> 
          </div>
 
          <div class="input-box">
            <span class="details"> Password</span>
            <input type="password" placeholder="Enter your password" required>
          </div>
           
          <div class="input-box">
            <span class="details">Course</span>
            <select>  
                <option value="Course">Select Course</option>  
                <option value="IT Engineering">IT Engineering</option>  
                <option value="Mechanical Engineering">Mechanical Engineering</option>  
                <option value="Electronic Engineering">Electronic Engineering</option>  
                <option value="Computer Engineering">Computer Engineering</option>  
                <option value="Automobile Engineering">Automobile Engineering</option>  
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
          
         
        </div>
         
        <div class="button">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
