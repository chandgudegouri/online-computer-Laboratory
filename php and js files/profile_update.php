<?php 
$con=mysqli_connect("localhost","root","","lab") or die(mysqli_error($con));
$sid=mysqli_real_escape_string($con,$_POST["sid"]);
$sname=mysqli_real_escape_string($con,$_POST["sname"]);
$email=mysqli_real_escape_string($con,$_POST["email"]);
$mobile=mysqli_real_escape_string($con,$_POST["mobile"]);
$course=mysqli_real_escape_string($con,$_POST["course"]);
$sem=mysqli_real_escape_string($con,$_POST["sem"]);
$uname=mysqli_real_escape_string($con,$_POST["uname"]);
$pwd=mysqli_real_escape_string($con,$_POST["pwd"]);
$user_authentication_query="UPDATE student SET course='$_POST[course]' , semester='$_POST[sem]' where sid='$_POST[sid]'";
$user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
//$rows_fetched=mysqli_num_rows($user_authentication_result);
if($user_authentication_result!=false){
        //no user
        //redirecting to same login page
        ?>
        <script>
            window.alert("Information Update Successfully");
        </script>
        
        <?php
		header('location: login.php');
        //header('location: login');
        //echo "Wrong email or password.";<meta http-equiv="refresh" content="1;url=Registration.php" />
    }else{
		?>
        <script>
            window.alert(" something is wrong");
        </script>
        <?php
        
        header('location:Profile.php');
    }
?>