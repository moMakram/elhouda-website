<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تواصل معنا</title>
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


<div id="contact">

<div id="us">

<font style="font-size:xx-large;"> تواصل معنا </font>

</div>

</div>


<div id="msg">



<form method="POST">

<input type="email" name="email" placeholder=".... اكتب ايميلك هنا" style="width:320px; height:35px; border-radius:35px; border-color:#06C; margin-left:80px; margin-top:15px; padding-left:25px; " />


<textarea name="subject" placeholder="...اكتب رسالتك هنا" style="width:400px; height:125px; border-radius:30px; border-color:#06c; margin-left:80px; margin-top:15px; padding-left:25px; padding-top:35px;">
</textarea>

<br/><br/>

<input type="submit" name="submit" value="ارسال" style="background:#06C; width:95px; height:35px; margin-left:360px; margin-top:0px; border-radius:15px;" />

<!--
<textarea placeholder="...اكتب اجابتك هنا" style="width:400px; height:90px; border-radius:30px; border-color:#06c; margin-left:80px; margin-top:15px; padding-left:25px; padding-top:25px;">
</textarea>

<input type="submit" value="ارسال" style="background:#06C; width:95px; height:35px; margin-left:0px; margin-top:0px; border-radius:15px;" />

-->
</form>





<?php
require_once('connec.php');
if(isset($_POST['submit'])){

$email = $_POST['email'];
$subject = $_POST['subject'];

if($email!==''&&$subject!=='')

{


  $result = mysql_query("INSERT INTO question (email,que)
 values('$email','$subject' )");
 echo "<br />";
if ($result){
echo('
<script type="text/javascript">
alert("شكرا على تواصلكم معنا .. سوف تجيب على اسئلتكم قريبا");
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
