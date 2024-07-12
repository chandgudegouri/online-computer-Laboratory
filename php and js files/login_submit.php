<?php
session_start();
$con=mysqli_connect("localhost","root","","lab") or die(mysqli_error($con));
$uname=mysqli_real_escape_string($con,$_POST["uname"]);
$password=mysqli_real_escape_string($con,$_POST["pwd"]);
$user_authentication_query="select sid,sname from student where uname='$uname' and pwd='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
        //no user
        //redirecting to same login page
        ?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
        //header('location: login');
        //echo "Wrong email or password.";
    }else{
        $row=mysqli_fetch_array($user_authentication_result);
        //$_SESSION['uname']=$email;
        $_SESSION['sname']=$row['sname'];  //user id
        header('location: home3.php');
        ?>
        <script>
        window.alert("sucessfully login");
    </script>
    <?php
    }

?>