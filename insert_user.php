<?php
$connect=mysqli_connect("localhost","forhad","01887342027","social_network");


if(isset($_POST["sign_up"])){
$first_name=htmlentities(mysqli_real_escape_string($connect,$_POST["first_name"]));
$lastname=htmlentities(mysqli_real_escape_string($connect,$_POST["last_name"]));
$userpassword=htmlentities(mysqli_real_escape_string($connect,$_POST["u_pwd"]));
$useremail=htmlentities(mysqli_real_escape_string($connect,$_POST["u_email"]));
$usercountry=htmlentities(mysqli_real_escape_string($connect,$_POST["u_country"]));
$usergender=htmlentities(mysqli_real_escape_string($connect,$_POST["u_gender"]));
$userbirthday=htmlentities(mysqli_real_escape_string($connect,$_POST["u_birthday"]));
$status="veryfied";
$posts="no";
$newgid=sprintf('%05d',rand(0,999999));
$username=strtolower($first_name."_".$lastname."_".$newgid);
$check_usrname_query="SELECT user_name FROM users WHERE user_email='$useremail'";
$run_usrname=mysqli_query($connect,$check_usrname_query);

if(strlen($userpassword)<9){


echo "<script>alert('Password should be 9 Characters')</script>";
exit();

}
$chekemail="SELECT * FROM users WHERE user_email='$useremail'";
$runemail=mysqli_query($connect,$chekemail);
$chek=mysqli_num_rows($runemail);

if($chek == 1){

echo "<script>alert('Email Already exist,Please try Using another email')</script>";
echo "<script>window.open('signup.php','_self')</script>";


}
$rand=rand(1,3);//RANDOM NUMBER BETWEEN 1 AND 3
if($rand==1)
$profile_pic="messneger- copy.png";



else if($rand==2)
    $profile_pic="likebtn.jpg";
    
    
    else if($rand==3)
        $profile_pic="koala.jpg";
        
       


$instertusers="INSERT INTO users VALUES('$first_name','$lastname','$username',
'Hello Coding Cafe This mydefault !,
'...','$userpassword','$useremail','$usercountry','$usergender','$userbirthday','$profile_pic',
'koala.jpg',NOW(),'$status','$posts','IWANTTOPUTADINGAUNIVERSE.')";

$QUERY=mysqli_query($connect,$instertusers);

if($QUERY==true){


    echo "<script>alert('WELL DONE  YOU ARE GOOD TO GO')</script>";
    echo "<script>window.open('signin.php','_self')</script>";

}

else{


    echo "<script>alert('RESIGTRATION FAILED,PLEASE TRY AGAIN!')</script>";
    echo "<script>window.open('signup.php','_self')</script>";



};





}


?>