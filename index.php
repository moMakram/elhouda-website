<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الرئيسية</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />



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






      <div id="contain">
  


      <div id="banner-fade">

        <ul class="bjqs">
		
		
		  <?php
			require_once('connec.php');
			 $sel = mysql_query("select * from pictures  order by ordere");
			  
			while($row = mysql_fetch_array($sel)){
			echo('
		
          <li style=" text-align:left;"><img src="'.$row['place'].'" title="'.$row['title'].'"></li>
		  
		  ');
		  }
		  ?>
		  <!--
          <li style=" text-align:left;"><img src="image_slider/2.jpg" title="natural marble"></li>
          <li style=" text-align:left;"><img src="image_slider/3.jpg" title="natural marble"></li>
          <li style=" text-align:left;"><img src="image_slider/4.jpg" title="natural marble"></li>
          <li style=" text-align:left;"><img src="image_slider/5.jpg" title="natural marble"></li>
           <li style=" text-align:left;"><img src="image_slider/6.jpg" title="natural marble"></li>
            <li style=" text-align:left;"><img src="image_slider/7.jpg" title="natural marble"></li>
             <li style=" text-align:left;"><img src="image_slider/8.jpg" title="natural marble"></li>
              <li style=" text-align:left;"><img src="image_slider/9.jpg" title="natural marble"></li>
               <li style=" text-align:left;"><img src="image_slider/10.jpg" title="natural marble"></li> -->

        </ul>

      </div>

      <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 300,
            width       : 700,
            responsive  : true
          });

        });
      </script>
  </div>
		
		
   




<div id="news">

<div id="newss">

<div id="nabza">


<font style="font-size:x-large;"> نبذه عن الشركه </font>

</div>
</div>

<div id="nn">

<?php
require_once('connec.php');
			$query="select * from texteditor ";
			 
			 $product = mysql_query($query);
		
			$row = mysql_fetch_array($product);
		
		echo $row['descr'];
		
		?>
		
		

<a href="company.php">
<div id="more">

<<< اعرف المزيد عننا

</div>
</a>


</div>


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
