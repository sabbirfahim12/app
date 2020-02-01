<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CODING CAFE</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body{overflow-x:hidden}
#centered1{
position:absolute;
top:30%;
left:30%;
font-size:10px;
transform:translate(-50%,-50%);

}


#centered2{
position:absolute;
top:50%;
left:37%;
font-size:10vw;
transform:translate(-50%,-50%);

}

#centered3{
position:absolute;
top:70%;
left:37%;
font-size:10vw;
transform:translate(-50%,-50%)

}
#firstbtn{border-radius:200px;width:370px}
*{margin:0px;padding:0px}
#secondbtn{border-radius:200px;width:370px}
#well{background-color:#4267b2;color:white;height:60px;font-size:20px;width:100%}
</style>
</head>

<body>
<div class="row">
<div class="col-sm-12">
<div class="well" id="well">
<center><b id="titl"><big>CODING CAFE</big></b></center>

</div>

</div>
</div>
<div class="row">
<div class="col-sm-6 col-lg-6" style="left:0.5%">
<img src="img/download.jpg" class="img-rounded" 
title="coding cafe" width="500px" height="370px"/>

<div id="centered1" class="centered"><h3 style="color:white"><span class="glyphicon glyphicon-search">
</span><strong>Follow your Interests</strong></h3></div>

<div id="centered2" class="centered"><h3 style="color:white"><span class="glyphicon glyphicon-search">
</span><strong>What people are Talking about</strong></h3></div>


<div id="centered3" class="centered"><h3 style="color:white"><span class="glyphicon glyphicon-search">
</span><strong>JOIN THE CONVERSATION</strong></h3></div>



</div>
<div class="col-sm-6 col-lg-6" style="left:8%">
<img src="img/programming-code-icon-abstract-code-icon-logo-vector-20289692.jpg" class="img-rounded" 
title="coding cafe" width="80px" height="60px"/>
<h2><strong>SEE What's happening on<br/>WORLD NOW</strong></h2><br/><br/>
<h4><strong>JOIN CODE CAFE TODAY</strong></h4>

<form action="" method="POST">
<button name="sign_up" class="btn btn-info btn-lg" id="firstbtn" name="log_in">SIGN UP</button><br/><br/>
<?php
if(isset($_POST["sign_up"])){

    echo "<script>window.open('signup.php','_self')</script>";
}

?>



<button id="secondbtn"  class="btn btn-info btn-lg" name="log_in">Log In </button><br/><br/>
<?php
if(isset($_POST["log_in"])){

    echo "<script>window.open('signin.php','_self')</script>";
}

?>




</form>
</div>

</div>
</body>
</html>