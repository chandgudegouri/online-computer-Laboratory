<html>
<head>
 <title></title>
 <link rel="stylesheet" type="text/css" href="Posttest2.css">
 <script> 
   function check()
{
    var c=0;
    var q1=document.quiz.que1.value;
    var q2=document.quiz.que2.value;
    var q3= document.quiz.que3.value;
    var q4=document.quiz.que4.value;
    var q5=document.quiz.que5.value;
    if(q1=="Neck "){c++}
    if(q2== "!DOCTYPE tag"){c++}
    if(q3==" html tag"){c++}
    if(q4=="BODY  tag  "){c++}
    if(q5==" HTML tag "){c++}
     document.write(c);
}</script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>

    

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
        <b>PostTest</b>
        </div> 
       
       <div class="pretest">
        <div class="input">
    <div>
        <p> 1)  HTML document has three main elements. Which of the following is not one of them?
        </p>
        <input type ="radio" name="que1" value=" DTD ">a.DTD  
        <input type ="radio" name="que1" value=" Head ">b. Head 
        <input type ="radio" name="que1" value="Neck ">c. Neck
        <input type ="radio" name="que1" value=" Body">d. Body
    </div>
      <br/>
    <div>
        <p> 2)  Which of the following element can’t be contained in any other elements?
        </p>
        <input type ="radio" name="que2" value=" !DOCTYPE tag ">a. !DOCTYPE tag
        <input type ="radio" name="que2" value=" HTML tag ">b. HTML tag
        <input type ="radio" name="que2" value=" HEAD tag ">c. HEAD tag
        <input type ="radio" name="que2" value=" BODY tag">d. BODY tag
    </div>
      <br/>
    <div>
        <p> 3)  Which element contains the Head and Body elements inside it?</p>
         <input type ="radio" name="que3" value="!DOCTYPE tag ">a. !DOCTYPE tag
         <input type ="radio" name="que3" value=" html tag ">  b. html tag  
         <input type ="radio" name="que3" value=" living being ">c. living being
        <input type ="radio" name="que3" value=" none of above">d. none of above
    </div>
 <br/>
    <div>
        <p >4)  Which of the following is not an element in HTML document?</p>
        <input type ="radio" name="que4" value=" !DOCTYPE tag ">  a. !DOCTYPE tag     
         <input type ="radio" name="que4" value=" HTML tag "> b. HTML tag 
         <input type ="radio" name="que4" value=" HEAD tag "> c. HEAD tag
         <input type ="radio" name="que4" value=" BODY  tag "> d. BODY  tag 
    </div>
 <br/>
    <div>
        <p >5)  Which element is also known as root element in any HTML document?   </p>
         <input type ="radio" name="que5" value=" !DOCTYPE tag ">a. !DOCTYPE tag 
         <input type ="radio" name="que5" value=" HTML tag ">b.HTML tag
         <input type ="radio" name="que5" value=" HEAD tag  ">c. HEAD tag 
         <input type ="radio" name="que5" value="BODY  tag ">d.BODY  tag
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