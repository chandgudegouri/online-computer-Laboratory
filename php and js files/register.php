<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="reg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script>

    function validation()
    {
        var sn=document.forms["Register"]["sname"].value;
        var eid=document.forms["Register"]["email"].value;
        var phno=document.forms["Register"]["mobile"].value;
        var un=document.forms["Register"]["uname"].value;
        var pwd=document.forms["Register"]["pass"].value;

        if(sn==null||sn=="")
        {
            alert("name cannot be blank ");
            return false;
        }
        elseif(eid==null||eid=="")
        {
            alert("Invalid Email Id");
            return false;
        }
        elseif(phno==null||phno=="")
        {
            alert("Invalid Phone no");
            return false;
        }
         
        elseif( un==null||un=="")
        {
            alert("Invalid Username");
            return false;
        }

        elseif( pwd==null||pwd=="")
        {
            alert("Invalid Password");
            return false;
        }
    }
   </script>

   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="register_student.php" method="POST"  name="Register" onsubmit="validation()">
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
            <input type="tel" name="mobile" placeholder="Enter your number" required>
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
            <input type="password" name="pass" placeholder="Enter your password" required>
          </div>
        </div>
         
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>