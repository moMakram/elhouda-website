<?php
session_start();
require_once('connec.php');
echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>إدخال معلومات عن الشركة</title>
<link href="css_control/controls.css" rel="stylesheet" type="text/css" media="all" />
<link href="css_control/responsive_control.css" rel="stylesheet" type="text/css" media="all" />


</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
');

if (isset($_SESSION['admin_session']) ) {
$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['aboutus']=='1'){
echo('

<div id="contain">
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div style="margin-top:0px;">





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : "Bold text", inline : "b"},
			{title : "Red text", inline : "span", styles : {color : "#ff0000"}},
			{title : "Red header", block : "h1", styles : {color : "#ff0000"}},
			{title : "Example 1", inline : "span", classes : "example1"},
			{title : "Example 2", inline : "span", classes : "example2"},
			{title : "Table styles"},
			{title : "Table row 1", selector : "tr", classes : "tablerow1"}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

</head>
<body role="application">



<form method="post" >

  
<br/><br/>
	<div>
		

		

		<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
		<div style="margin-left:100px;">
			<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 16%">
				
				
		
				
			</textarea>
		</div>

		<!-- Some integration calls -->
		
		<a href="javascript:;" onclick= alert(tinyMCE.get("elm1").getContent());return false;>[Get contents]</a>
		
		 

</script>
</head>
<body>

		<br /><br/>
		
	<input type="submit" name="save" id="save" value="تنفيذ الاضافة " style="margin-left:400px; width:90px; height:30px; border-radius:5px; background-color:#090; "/>
		
	</div>
</form> ');

if(isset($_POST['save'])){


$elm1=$_POST['elm1'];


 ////  $result = mysql_query(" update texteditor set descr='$_POST[elm1]' and title=$_POST[title]' ");
 
   $result = mysql_query("INSERT INTO texteditor (descr)
 values('$elm1' )");

if ($result){


echo ('<font size="4px" > تم التعديل على البيانات </font>');
echo (' <font size="5px" >يتم التحديث الان من فضلك انتظر ثوانى  </font> '); 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=About_control.php\">";
}
else
{
echo "error";
}

}

echo('
<script type="text/javascript">
if (document.location.protocol == /"file:/") {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>
</body>
</html>








</div>
<div id="fotter5"></div> 
</div>');


 }else{

echo('
<script type="text/javascript">

window.location ="control.php";
///alert ("غير مسموح لك بالدخول هنا");
</script>
');

}

}else{

///header("location:login.php");

echo('
<script type="text/javascript">

window.location ="login.php";
</script>
');

}
echo('
</body>
</html>
');
?>
