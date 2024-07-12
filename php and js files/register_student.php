<?php 
$con=mysqli_connect("localhost","root","","lab") or die(mysqli_error($con));
$sname=mysqli_real_escape_string($con,$_POST["sname"]);
$email=mysqli_real_escape_string($con,$_POST["email"]);
$mobile=mysqli_real_escape_string($con,$_POST["mobile"]);
$course=mysqli_real_escape_string($con,$_POST["course"]);
$sem=mysqli_real_escape_string($con,$_POST["sem"]);
$uname=mysqli_real_escape_string($con,$_POST["uname"]);
$pwd=mysqli_real_escape_string($con,$_POST["pwd"]);
$user_authentication_query="insert into student(sname,mobile,emailid,pwd,course,semester,uname) values('$sname','$mobile','$email','$pwd','$course','$sem','$uname')";
$user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
//$rows_fetched=mysqli_num_rows($user_authentication_result);
if($user_authentication_result!=false){
        //no user
        //redirecting to same login page
        ?>
        <script>
            window.alert("Student Registered Successfully");
        </script>
        
        <?php
		header('location: login3.php');
        //header('location: login');
        //echo "Wrong email or password.";<meta http-equiv="refresh" content="1;url=Registration.php" />
    }else{
		?>
        <script>
            window.alert("Incorrect Information");
        </script>
        <?php
        
        header('location: Registration.php');
    }
?>