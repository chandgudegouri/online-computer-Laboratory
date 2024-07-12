<html>
<head>
 <title></title>
 <link rel="stylesheet" type="text/css" href="Pretest1.css">
   <script>   function check()
{
    var c=0;
    var q1=document.quiz.que1.value;
    var q2=document.quiz.que2.value;
    var q3= document.quiz.que3.value;
    var q4=document.quiz.que4.value;
    var q5=document.quiz.que5.value;
    if(q1=="html tag"){c++}
    if(q2=="1990"){c++}
    if(q3==" /"){c++}
    if(q4=="none of these "){c++}
    if(q5=="Id "){c++}
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
   
 <label onclick="location.href='aim.php';">Aim</label><br/><br/> 
 <label onclick="location.href='theory.php';">Theory</label><br/><br/>
 <label onclick="location.href='procedure.php';">Procedure</label><br/><br/>
 <label>Pretest</label><br/><br/>
 <label onclick="location.href='simulation.php';">Simulation</label><br/><br/>
 <label onclick="location.href='PostTest1.php';">PostTest</label><br/><br/>
 <label onclick="location.href='Reference.php';">Reference</label><br/><br/>
  
</div>

 
 
  


   <form   name="quiz" id="quiz">
    <div class="nm">
        <b>PreTest</b>
        </div> 
       
       <div class="pretest">
        <div class="input">
    <div>
        <p> 1) What should be the first tag in any HTML document?</p>
         <input type ="radio" name="que1" value="head tag">  a.  head tag
         <input type ="radio" name="que1" value="html tag">  b.  html tag 
         <input type ="radio" name="que1" value=" hmlt tag"> c.hmlt tag 
         <input type ="radio" name="que1" value=" None of these">   d.None of these
    </div>
      <br/>
    <div>
        <p> 2) The year in which HTML was first proposed _______.</p>
          <input type ="radio" name="que2" value=" 1990 ">   a.1990 
        <input type ="radio" name="que2" value="2000">    b. 2000
         <input type ="radio" name="que2" value=" 1980 ">   c. 1980
        <input type ="radio" name="que2" value="1995">   d.1995 
    </div>
      <br/>
    <div>
        <p> 3) Which character is used to represent the closing of a tag in HTML?-</p>
         <input type ="radio" name="que3" value=" \ ">  a. \ 
         <input type ="radio" name="que3" value=" ! ">  b. !  
         <input type ="radio" name="que3" value=" /">  c.  / 
        <input type ="radio" name="que3" value=" .">  d. . 
    </div>
 <br/>
    <div>
        <p >4)  HTML tags are enclosed in-  </p>
        <input type ="radio" name="que4" value=" # and #">  a.  # and #   
         <input type ="radio" name="que4" value="  { and }"> b. { and } 
         <input type ="radio" name="que4" value="! and ? "> c. ! and ?
         <input type ="radio" name="que4" value="none of these  "> d. none of these 
    </div>
 <br/>
    <div>
        <p >5)  Which of the following attribute is used to provide a unique name to an element?  -</p>
         <input type ="radio" name="que5" value="class ">a. class
         <input type ="radio" name="que5" value=" Id ">b.Id  
         <input type ="radio" name="que5" value="type ">c.type 
         <input type ="radio" name="que5" value=" none of these ">d.none of these
    </div>

    <div class="button">
    <input type="button" value="Submit" onclick="check()">
    
</div>
    </div>
    </div>
   
</form>
</header>     

</body>
</html>