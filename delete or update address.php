<?php
session_start();

require_once('connec.php');



echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>حذف او تعديل العنوان</title>
<link href="css_control/controls.css" rel="stylesheet" type="text/css" media="all" />
<link href="css_control/responsive_control.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {
$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['updatepictures']=='1'){
echo('
<div id="contain">

<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>

<div id="body2">



<br/>

<table width="650" border="0" style="text-align:center; margin-left:50px; margin-top:40px;">
  <tr style="background:#999; height:35px;">
    
    <td><font face="Comic Sans MS, cursive"  color="#000000">التليفون</font></td>
	<td><font face="Comic Sans MS, cursive"  color="#000000">العنوان</font></td>
	  
		
    <td><font face="Comic Sans MS, cursive"  color="#000000">Delete</font></td>
  </tr>
  
  ');
	 $sel = mysql_query("select * from address  ");
			  
			while($row = mysql_fetch_array($sel)){
			
			echo('
  <tr style="background:#03C;height:30px;">
    <td>'); echo $row['phone']; echo('</td>
    
   
	<td>'); echo $row['addresse']; echo('</td>
	<td>');  echo (' <a href="delete_address.php?id= '); echo $row['id']; echo('"> <font color="white"> delete </font></a></td>
  </tr> '); } 
  
  echo('
</table>
<br/>
');

echo('
</div>
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

