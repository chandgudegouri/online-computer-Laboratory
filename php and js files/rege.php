<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="reg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="register_student.php" method="POST" onsubmit="return validation()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Student Name</span>
            <input type="text" name="sname"  id="sname" placeholder="Enter your Name" required>
            <span id="stname" class="details"> </span>
          </div>

          <div class="input-box">
            <span class="details">Email ID</span>
            <input type="text" name="email" id="email" placeholder="Enter your Email ID" required>
            <span id="emailid" class="details"> </span>    
        </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="mobile" id="phno" placeholder="Enter your number" required>
            <span id="phoneno" class="details"> </span>
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
            <input type="text" name="uname" id="user" placeholder="Enter your username" required>
            <span id="username" class="details "> </span>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pwd" id="pass" placeholder="Enter your password" required>
            <span id="password" class="details"> </span>
          </div>
        </div>
         
        <div class="button">
          <input onclick="location.href='login3.php';" type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
     

  <script type="text/javascript">
		

		function validation(){

            var sname  = document.getElementById('sname').value;
			var phno = document.getElementById('phno').value;
			var email = document.getElementById('email').value;
            var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;


          
			if(sname == ""){
				document.getElementById('stname').innerHTML =" ** Please fill the  fullname field";
				return false;
			}
			if((sname.length <= 2) || (user.length > 30)) {
				document.getElementById('stname').innerHTML =" ** stname lenght must be between 2 and 30";
				return false;	
			}
			if(!isNaN(sname)){
				document.getElementById('tsname').innerHTML =" ** only characters are allowed";
				return false;
			}

			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}







			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;	
			}


			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
				return false;
			}



			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
				return false;
			}




			if(mobileNumber == ""){
				document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=10){
				document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
				return false;
			}



			if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" ** . Invalid Position";
				return false;
			}
		}

	</script>

</body>
</html>
