<html>
<head>
 <title></title>
 <link rel="stylesheet" type="text/css" href="Pretest2.css">
 <script>   function check()
{
    var c=0;
    var q1=document.quiz.que1.value;
    var q2=document.quiz.que2.value;
    var q3= document.quiz.que3.value;
    var q4=document.quiz.que4.value;
    var q5=document.quiz.que5.value;
    if(q1=="  select tag  "){c++}
    if(q2== "ul tag"){c++}
    if(q3==" b tag "){c++}
    if(q4==" p tag "){c++}
    if(q5==" .html "){c++}
     document.write(c);
}</script> 
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body background="img2.jpeg">

    

<header class="site-header clearfix">
 <nav>
  <div class="name ">
  <b>Online Computer Laboratory</b>
  </div>
  <div class="menu"> 
   <ul>
   
    <li>Profile</li>
    <li>Logout</li>
   </ul>
  </div>
 </nav>
 
 
  

</div>
<div class="rightside"> 
   
<label onclick="location.href='aim2.php';">Aim</label><br/><br/> 
 <label onclick="location.href='theory1.php';">Theory</label><br/><br/>
 <label onclick="location.href='procedure2.php';">Procedure</label><br/><br/>
 <label  onclick="location.href='PreTest2.php';">Pretest</label><br/><br/>
 <label  onclick="location.href='simulation.php';">Simulation</label><br/><br/>
 <label onclick="location.href='Posttest2.php';">PostTest</label><br/><br/>
 <label onclick="location.href='Reference.php';" >Reference</label><br/><br/>
  
</div>

 
 
  


<form   name="quiz" id="quiz">
    <div class="nm">
        <b>PreTest</b>
        </div> 
       
       <div class="pretest">
        <div class="input">
    <div>
        <p> 1) Which  g tag is used to in a drop-down selection list?  -</p>
        <input type ="radio" name="que1" value="  select tag ">a. select tag  
        <input type ="radio" name="que1" value=" list tag ">b. list tag  
        <input type ="radio" name="que1" value="  droupdown tag">c.droupdown tag 
        <input type ="radio" name="que1" value=" option tag">d.option tag
    </div>
      <br/>
    <div>
        <p> 2) which tag is used to make the underlined text?  -</p>
         <input type ="radio" name="que2" value=" i tag  ">a. i tag 
         <input type ="radio" name="que2" value=" ul tag">b. ul tag 
        <input type ="radio" name="que2" value=" u tag  ">c. u tag 
        <input type ="radio" name="que2" value= "pre tag">d. pre tag.
    </div>
      <br/>
    <div>
        <p> 3) Which  HTML tag is the special formatting tag? -</p>
         <input type ="radio" name="que3" value="p tag ">a. p tag  
         <input type ="radio" name="que3" value=" b tag ">b. b tag   
         <input type ="radio" name="que3" value="pre tag ">c.pre tag   
        <input type ="radio" name="que3" value="none of these ">d. none of these.
    </div>
 <br/>
    <div>
        <p >4) Which is the paragraph tag in HTML?  -</p>
        <input type ="radio" name="que4" value=" p tag ">  a. p tag </p>    
         <input type ="radio" name="que4" value=" b tag  "> b. b tag 
         <input type ="radio" name="que4" value="pre tag "> c. pre tag  
         <input type ="radio" name="que4" value=" none of these "> d. none of thse.  
    </div>
 <br/>
    <div>
        <p >5)  An HTML program is saved by using the ____ extension </p>
         <input type ="radio" name="que5" value=" .ht">a. .ht
         <input type ="radio" name="que5" value=" .html ">b. .html
         <input type ="radio" name="que5" value=" .hml ">c. .hml
         <input type ="radio" name="que5" value=" none of these ">d.none of these
    </div>
    <div class="button">
    <input type="submit" value="Submit" onclick="check()">
    
    </div>
    </div>
    </div>
</form>
</header>     

</body>
</html>