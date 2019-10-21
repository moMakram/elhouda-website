<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>فيديو</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
     <style type="text/css">
        h4 { font-size: 16px; font-family: "Trebuchet MS", Verdana; line-height:-8px;} 
    </style>
	
	
	
	
	
	
	
	
	
  <link rel="stylesheet" href="css/demo.css">
      <script>
    jQuery(function($) {

        $('.secret-source').secretSource({
            includeTag: false
        });

    });
    </script>

    <link rel="stylesheet" href="css/bjqs.css">

   <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>

    <style type="text/css">
    a:link {
	text-decoration: none;
	color:#FF0;
}
a:visited {
	text-decoration: none;
	color:#FF0;
}
a:hover {
	text-decoration: none;
	color:#FF0;
}
a:active {
	text-decoration: none;
	color:#FF0;
}
    </style>
    		<!-- Start VisualLightBox.com HEAD section -->
		<link rel="stylesheet" href="gallery_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="gallery_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
<script src="gallery_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="gallery_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
	
	
	
	
	
	
	
	
	

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

 
 
		  <?php
		  require_once('connec.php');
	$id=$_GET['vidsec'];

$results = mysql_query(" select * from video where id ='$id' ");

$row = mysql_fetch_array($results);

$videosec = $row['name'];

////echo $prod;
			
				$querye="select * from viditem where  vidsec='$videosec' ";
			 
			 $selse = mysql_query($querye);
		
		while($rowse = mysql_fetch_array($selse)){
		
	?>
 
 
 
 
 
 <div id="video_item">
 
 
  <embed width="250" height="190"
src="http://www.youtube.com/v/<?php echo$rowse['descr']; ?>"
type="application/x-shockwave-flash" allowfullscreen="true" > 


 
 </div>
 
<?php
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
