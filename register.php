<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التسجيل فى الموقع </title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />




</head>

<body>
<div id="cont">

<div id="header">
  
  <div id="spot">
  
  </div>
  
  <div id="logincont">
  
  <form>
  
  <input type="text"  placeholder="بريدك الالكترونى" style="width:120px; height:15px; border-radius:10px; margin-left:40px; margin-top:15px;" />
  
   
  <input type="text" placeholder="...كلمه المرور" style="width:120px; height:15px; border-radius:10px; margin-left:15px; margin-top:15px;" />
  
  
  <input type="submit" value="دخول" style="width:50px; height:25px; margin-left:15px; margin-top:10px; border-radius:5px; border-color:#00C; background:#FFF; color:#000;" />
  
  
  </form>
  
  <div id="forget">
  
  نسيت كلمه المرور
  
  </div>


  </div>
  
<?php
include("menu.php");
?>
  
 
  
 <div id="partener" 
  style="background:url(image/partener.png)">
  
  
  </div>


<div id="tree">

</div>


</div>


<div id="body2">

<?php
include("menu2.php");
?>
  
  
  <div id="slid">

<div id="register">


<div id="re">

<font style="font-size:xx-large; "> التسجيل</font>

</div>



</div>

<div id="info">
 <form method="POST">
<font style="font-size:large;">   -الاسم الاول </font>
 <input type="text" name="first"  placeholder="الاسم الاول"
 style=" width:220px; height:25px; margin-left:60px; margin-top:15px; border-radius:10px; border-color:#06C; padding-left:25px;  " />
 <br />

<font style="font-size:large;"> -الاسم الاخير </font>
<input type="text" name="last" placeholder="الاسم الاخير"
 style=" width:220px; height:25px; margin-left:54px; margin-top:15px; border-radius:10px; border-color:#06C; padding-left:25px;  " />

<br/>

<font style="font-size:large;"> -الايميل </font>
<input type="email"  name="email" placeholder="الايميل"
 style=" width:220px; height:25px; margin-left:88px; margin-top:15px; border-radius:10px; border-color:#06C; padding-left:25px;  " />
 
 <br />
 
<font style="font-size:large;">  -كلمه السر </font>
<input type="text" name="password" placeholder="كلمه السر"
 style=" width:220px; height:25px; margin-left:69px; margin-top:15px; border-radius:10px; border-color:#06C; padding-left:25px;  " />
 
 <br />
 
<font style="font-size:large;">  -اعد كلمه السر</font>

  
  <input type="text" name="repassword"  placeholder="اعد كلمه السر"
 style=" width:220px; height:25px; margin-left:47px; margin-top:15px; border-radius:10px; border-color:#06C; padding-left:25px;  " />

 <br />
<font style="font-size:large;">  -الموبايل</font>
 

 <input type="text" name="phone"  placeholder="الموبايل"
 style=" width:220px; height:25px; margin-left:84px; margin-top:15px; border-radius:10px; border-color:#06C; padding-left:25px;  " />

<br />
 
 <!--
 <input type="checkbox" style="width:30px; height:15px; margin-top:20px; margin-left:150px;  "  /> <font size="+1">الشروط والاحكام
</font> -->

 <input type="submit" name="submit" value="ارسال" style="width:80px; height:35px; margin-top:20px; margin-left:150px; background:#007fa4; border-radius:5px; "  />



 </form>
</div>




<?php
require_once('connec.php');
if(isset($_POST['submit'])){

$email = $_POST['email'];
$first = $_POST['first'];
$last = $_POST['last'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if($email!==''&&$first!==''&&$last!==''&&$email!==''&&$phone!==''&&$password!==''&&$repassword!=='')

{


  $result = mysql_query("INSERT INTO register (phone,email,password,firstname,lastname)
 values('$phone','$email','$password','$first','$last')") or mysql_error();
 echo "<br />";
if ($result){
echo('
<script type="text/javascript">
alert("شكرا على تسجيلكم فى الموقع .. انتظروا كل جديد");
</script>
');

}
else
{
echo "error";
echo('
<script type="text/javascript">
alert("error");
</script>
');
}


}else{

echo('
<script type="text/javascript">
alert("من فضلك املأ جميع الحقول");
</script>
');

}

}
?>























<div id="tree2">


</div>



</div>
  
  
<div id="cl">

</div>




<div id="ap">
<div id="adress">
 
 </div>
  
  <?php
  	$query2="select * from address ";
			 
			 $product2 = mysql_query($query2);
		
			$rowe = mysql_fetch_array($product2);
  ?>
   <div id="phone">
   
   <?php  echo $rowe['phone'];?>
  
    </div>
    

 <div id="st">
 
   <?php  echo $rowe['addresse'];?>
    </div>
    
    </div> 
	
	



</div>

<div id="fotter">


</div>
</div>

</body>
</html>
