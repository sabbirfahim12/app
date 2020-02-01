<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN UP</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

body{overflow-x:hidden}

.main_content{width:50%;height:40%;margin:10px auto;background-color:#fff;
border:2px solid #e6e6e6;
padding:40px 60px;

}
.header{margin-bottom:5px;border:none;}

#signup{border-radius:20px;width:200px}


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
<div class="col-sm-12">
<div class="main_content">
<div class="header">
<h3 style="text-align:center"><strong>JOIN CODING CAFE</strong></h3><hr/>
</div>
<div  class="l-part">
<form action="" method="POST">

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<input type="text" id="text1" name="first_name" class="form-control" placeholder="First NAME" required="required"/>
</div><br/>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<input type="text" id="text2" name="last_name" class="form-control" placeholder="last NAME"
 required="required"/>
</div><br/>




<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" id="password" name="u_pwd" class="form-control" placeholder="ENTER YOUR PASSWORD" 
required="required"/>
</div><br/>



<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input type="email" id="email" name="u_email" class="form-control" placeholder="ENTER YOUR EMAIL" 
required="required"/>
</div><br/>




<div class="input-group">
<span class="input-group-addon"><i class="glyphicon-chevron-down"></i></span>
<select name="u_country" id="select" class="form-control" required="required">
<option disabled>SELECT YOUR COUNTRY</option>
<option>BANGLADESH</option>
<option>JAPAN</option>
<option>UK</option>
<option>AMERICA</option>
<option>FRANCE</option>
<option>GERMAN</option>


</select>

</div><br/>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon  glyphicon-chevron-down"></i></span>
<select name="u_gender" class="form-control input-md" required="required">
<option disabled>SELECT YOUR COUNTRY</option>
<option>MALE</option>
<option>FEMALE</option>
<option>OTHERS</option>


</select>


</div><br/>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon  glyphicon-calendar"></i></span>
<input type="date" name="u_birthday" class="form-control" placeholder="ENTER YOUR EMAIL" 
required="required"/>
</div><br/>

<a style="text-decoration;float:right;color:#187FAB" title="signin"  href="signin.php" data-toogle="tooltip"
>Already have an account?</a><br/><br/> 

<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">SIGNUP</button></center>








</form>

</div>

</div>





</div>

<?php
include_once("insert_user.php");

?>


</body>
</html>