<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>جاليرى</title>
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

		<!-- Start VisualLightBox.com BODY section id=1 -->
	<div id="vlightbox1">
	
		  <?php
		  require_once('connec.php');
	$id=$_GET['idpro'];

$results = mysql_query(" select * from product where id ='$id' ");

$row=mysql_fetch_array($results);

$prod = $row['name'];

////echo $prod;
			
				$querye="select * from proitem where  prodname='$prod' ";
			 
			 $selse = mysql_query($querye);
		
		while($rowse = mysql_fetch_array($selse)){
		
	?>
		
	
	<a class="vlightbox1" href="<?php echo $rowse['pic']; ?>" title="<?php echo $rowse['descr']; ?>"><img src="<?php echo $rowse['pic']; ?>" alt="<?php echo $rowse['descr']; ?>" width="160px" height="120px"/></a>
	<?php
}
?>

	<!--
<a class="vlightbox1" href="gallery_files/vlb_images1/2.jpg" title="2"><img src="gallery_files/vlb_thumbnails1/2.png" alt="2"/></a>
<a class="vlightbox1" href="gallery_files/vlb_images1/3.jpg" title="3"><img src="gallery_files/vlb_thumbnails1/3.png" alt="3"/></a>
<a class="vlightbox1" href="gallery_files/vlb_images1/4.jpg" title="4"><img src="gallery_files/vlb_thumbnails1/4.png" alt="4"/></a>
<a class="vlightbox1" href="gallery_files/vlb_images1/5.jpg" title="5"><img src="gallery_files/vlb_thumbnails1/5.png" alt="5"/></a>
<a class="vlightbox1" href="gallery_files/vlb_images1/6.jpg" title="6"><img src="gallery_files/vlb_thumbnails1/6.png" alt="6"/></a>
<a class="vlightbox1" href="gallery_files/vlb_images1/7.jpg" title="7"><img src="gallery_files/vlb_thumbnails1/7.png" alt="7"/></a>
<a class="vlightbox1" href="gallery_files/vlb_images1/8.jpg" title="8"><img src="gallery_files/vlb_thumbnails1/8.png" alt="8"/></a>
<a class="vlightbox1" href="gallery_files/vlb_images1/9.jpg" title="9"><img src="gallery_files/vlb_thumbnails1/9.png" alt="9"/></a>
<a class="vlightbox1" href="gallery_files/vlb_images1/10.jpg" title="10"><img src="gallery_files/vlb_thumbnails1/10.png" alt="10"/></a> -->
<span class="vlb"><a href="http://visuallightbox.com">jquery lightbox for videos</a>by VisualLightBox.com v5.9</span>
	</div>
	<script src="gallery_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
	<!-- End VisualLightBox.com BODY section -->


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
