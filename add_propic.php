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
if($go['addpropic']=='1'){

echo('
<div id="contain">
<div id="add_pictures_word"></div>

<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body2">
<form method="POST" enctype="multipart/form-data">




  <table width="480" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
   
   
   
   
  
    <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">مكان الصوره</font></td>
      <td style="background-color:#060">
    
   <select name="choose" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/>

   
       ');
			 $sele = mysql_query("select * from product order by id ");
			  
			while($rowe = mysql_fetch_array($sele)){
			echo('
         
		  
		         
<option>'); echo $rowe['name']; echo('</option>
'); 
} 
echo('
   
   
   
   
   
</select>
</td>
  </tr>
  
  <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">وصف الصوره</font></td>
      <td style="background-color:#060"><input name="descr" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
    <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الترتيب</font></td>
      <td style="background-color:#060"><input name="ordere" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
	
	
	
	
	
	
	 <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الصوره</font></td>
      <td style="background-color:#060"><input type="file" id="file" name="file" style=" margin-left:5px;" /></td>
    </tr>
	
	 
	
	
  
  </table>


<br/>
<input type="submit" name="submit" id="submit" value="تنفيذ الاضافة " style="margin-left:400px; width:90px; height:30px; border-radius:5px; background-color:#090; "/>

</form>
');

if(isset($_POST['submit'])){

$choose = $_POST['choose'];



$descr = $_POST['descr'];
$ordere= $_POST['ordere'];

    if ($_FILES["file"]["error"] > 0)
    {
        echo "Error Code: " . $_FILES["file"]["error"];
        echo "<br />";
    }
    else
    {
        echo "Uploaded File Name: " . $_FILES["file"]["name"];
        echo "<br />";
        echo "File Type: " . $_FILES["file"]["type"];
        echo "<br />";
        echo "File Size: " . ($_FILES["file"]["size"])." bytes";
        echo "<br />";
        echo "Temp file name: " . $_FILES["file"]["tmp_name"];
        echo "<br />";

        if (file_exists("photo/" . $_FILES["file"]["name"]))
        {
            echo "A file with the name " . $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "photo/" . $_FILES["file"]["name"]);
            echo "The file was stored in: " . "photo/" . $_FILES["file"]["name"];
        }
    }
	   $imname =  $_FILES["file"]["name"];
	   $dir = "photo/".$_FILES['file']['name'];
	   
	
	   
				$querye="select * from product where  name='$choose' ";
			 
			 $selse = mysql_query($querye);
		
		$rowse = mysql_fetch_array($selse);
		
		echo $rowse['id'];
	   
	   
	   
	   
  $result = mysql_query("INSERT INTO proitem(pic,descr,ordere,prodname)
 values('$dir','$descr','$ordere','$choose' )");
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
