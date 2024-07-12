<html>
<head>
 <title></title>
 <link rel="stylesheet" type="text/css" href="Pretest1.css">
  
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script>   function check()
{
    var c=0;
    var q1=document.quiz.que1.value;
    var q2=document.quiz.que2.value;
    var q3= document.quiz.que3.value;
    var q4=document.quiz.que4.value;
    var q5=document.quiz.que5.value;
    if(q1==" img"){c++}
    if(q2== " strong"){c++}
    if(q3==" head "){c++}
    if(q4==" hr  "){c++}
    if(q5==" html "){c++}
     document.write(c);
}</script>
</head>
<body  background="img2.jpeg">
 

    

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
 <b><label onclick="location.href='procedure.php';">Procedure</label><br/><br/></b>
 <label onclick="location.href='PreTest1.php';">Pretest</label><br/><br/>
 <label onclick="location.href='simulation.php';">Simulation</label><br/><br/>
 <label >PostTest</label><br/><br/>
 <label onclick="location.href='Reference.php';">Reference</label><br/><br/>
</div>

 
 
  


<form   name="quiz" id="quiz">
    <div class="nm">
        <b>PostTest</b>
        </div> 
       
       <div class="pretest">
        <div class="input">
    <div>
        <p> 1)  A webpage displays a picture. What tag was used to display that picture?</p>
        <input type ="radio" name="que1" value=" picture ">a. picture   
        <input type ="radio" name="que1" value=" image ">b. image 
        <input type ="radio" name="que1" value="  img ">c.img 
        <input type ="radio" name="que1" value=" src">d.src
    </div>
      <br/>
    <div>
        <p> 2) b tag makes the enclosed text bold. What is other tag to make text bold -</p>
        <input type ="radio" name="que2" value=" strong tag  ">a.strong tag
        <input type ="radio" name="que2" value="dar tag ">b. dar tag 
        <input type ="radio" name="que2" value=" black tag  ">c.black tag
        <input type ="radio" name="que2" value="emp tag "> d. emp tag
    </div>
      <br/>
    <div>
        <p> 3) Tags and text that are not directly displayed on the page are written in ___ section.</p>
         <input type ="radio" name="que3" value="html ">a. html
         <input type ="radio" name="que3" value=" head ">  b. head 
         <input type ="radio" name="que3" value=" title ">c. title  
        <input type ="radio" name="que3" value=" body">d. body  
    </div>
 <br/>
    <div>
        <p >4)  Which tag inserts a line horizontally on your web page?</p>
        <input type ="radio" name="que4" value=" hr ">  a.  hr    
         <input type ="radio" name="que4" value=" line  "> b. line
         <input type ="radio" name="que4" value=" tr"> c. tr 
         <input type ="radio" name="que4" value=" none of the above "> d. none of the above
    </div>
 <br/>
    <div>
        <p >5)  What should be the first tag in any HTML document? </p>
         <input type ="radio" name="que5" value="head ">a. head 
         <input type ="radio" name="que5" value=" title ">b.title
         <input type ="radio" name="que5" value=" html ">c. html
         <input type ="radio" name="que5" value="document ">d.document
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