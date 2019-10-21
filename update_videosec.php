<?php
session_start();

require_once('connec.php');



echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>حذف او تعديل الاقسام</title>
<link href="css_control/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {



$id=$_GET['id'];

$result = mysql_query(" select * from video where id ='$id' ");

$rows=mysql_fetch_array($result);

echo('
<div id="contain">

<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>

<div id="body2">




<form id="form1" name="form1" method="POST" action="update_ac_videosec.php" enctype="multipart/form-data">

<table width="530" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">


 <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">اسم القسم</font></td>
    <td style="background-color:#060"><input name="name" type="text" value=" '); echo $rows['name']; echo('"
	style=" border:none;margin-left:6px; margin-top:2px; width:150px; height:20px;"/></td>
  </tr>
  
  
  
  
  
  <tr>
    <td width="280" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">حالة الظهور</font></td>
    <td style="background-color:#060"><select name="showe" id="showe" 
	style=" border:none;margin-left:6px; margin-top:2px; width:150px; height:20px;">
	 <option>');echo $rows['showe'];  echo('</option>');
	 if ( $rows['showe'] == "لا يظهر")
	 {
	 echo('
    <option>يظهر</option>');
	}
	else
	{
	echo('
    <option>لا يظهر</option>
	');
	}
	echo('
  </select></td>
  </tr>
  
  
  
  
  
  
  <tr>
    <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الترتيب</font></td>
    <td style="background-color:#060"><input name="ordere" type="text" value=" '); echo $rows['ordere']; echo('"
	style=" border:none;margin-left:6px; margin-top:2px; width:150px; height:20px;"/></td>
  </tr>
  
  	 <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الصوره</font></td>
      <td style="background-color:#060"><input type="file"  name="file" style=" margin-left:5px;" /></td>
    </tr>

</table>

<input name="id" type="hidden" id="id" value=" '); echo $rows['id']; echo(' "  />   
<br/>
 <input type="submit" name="button" id="button" value="OK" style="margin-left:400px; width:90px; height:30px; border-radius:5px; background-color:#090; " />
  
<br/><br/>



</form>






</div>
<div id="fotter5"></div> 
</div>
');



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

