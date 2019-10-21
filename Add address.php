<?php

session_start();
require_once('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>إضافة الصور</title>
<link href="css_control/controls.css" rel="stylesheet" type="text/css" media="all" />
<link href="css_control/responsive_control.css" rel="stylesheet" type="text/css" media="all" />

	

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');


if (isset($_SESSION['admin_session']) ) {
///echo $_SESSION['id8'];
$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['addpictures']=='1'){

echo('
<div id="contain">


<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body2">

<form method="POST" enctype="multipart/form-data">




  <table height="150" border="0" bordercolor="#000" id="tabmak">
   
   

   
  

  
  <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">ادخل التليفون</font></td>
      <td style="background-color:#060"><input name="phone" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
    <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">ادخل العنوان</font></td>
      <td style="background-color:#060"><input name="address" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
	
	
	
	
	
	
	
	
	 
	
	
  
  </table>


<br/>
<input type="submit" name="submit" value="تنفيذ الاضافة " id="submak55" />

</form>
');

if(isset($_POST['submit'])){



$phone = $_POST['phone'];
$address= $_POST['address'];

   
	  
  $result = mysql_query("INSERT INTO address (phone,addresse)
 values('$phone','$address' )");
 echo "<br />";
if ($result){
echo ("inserted");
echo("<br>");

}
else
{
echo "error";
}






}

echo('

<br/><br/>
</div>
<br/><br/><br/><br/>
<div id="fotter5"></div>
</div>
 ');
 
 }else{

echo('
<script type="text/javascript">

window.location ="control.php";
///alert ("غير مسموح لك بالدخول هنا");
</script>
');

}

}else{

echo('
<script type="text/javascript">

window.location ="login.php";
</script>
');
}

echo('
</body>
</html> ');

?>
