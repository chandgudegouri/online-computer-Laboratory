<html>
<head>
<title>Simulation</title>
<link rel="stylesheet" type="text/css" href="simul.css">
</head>
<body>
<form action="" method="POST">
<img src="synt.jpg" width="300" height="300 alt="syntax">
<textarea name="txt" rows="20" cols="50" >
</textarea>
 
<input  onclick="location.href='PreTest1.php';" class="button" type="back" value="Back">
<input class="button" type="submit" value="Run">
<input onclick="location.href='Posttest1.php';" class="button" type="next" value="Next">
 
<?php
if($_SERVER['REQUEST_METHOD']=='POST'&&$_POST["submit"]="submit")
{
$file_content=$_POST['txt'];
$file=fopen("demo.html","w+");
fwrite($file,$file_content);
fclose($file);
}
if($_SERVER['REQUEST_METHOD']=='POST'&&$_POST["submit"]="try")
{
?>
<iframe style="background-color:white" src="demo.html" height="300" width="500"></iframe>
<?php
}

?>
</form>
</body>
</html>