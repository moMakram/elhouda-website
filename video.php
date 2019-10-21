<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>فيديو</title>
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

<div id="video1">

<div id="video2">
<font style="font-size:xx-large;"> فيديو </font>

</div>

</div>

 <?php
			require_once('connec.php');
			$query="select * from video where showe='يظهر' order by ordere";
			 
			 $product = mysql_query($query);
		
			while($row = mysql_fetch_array($product))
		{
		echo('


<a href="video_item.php?vidsec='.$row['id'].'">
<div id="pro">
<div id="texpro">'.$row['name'].'</div>
<div id="proimg">
  <img src="'.$row['pic'].'" width="210" height="103"  />
  </div>
  

</div>
</a>

');
}
?>

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
