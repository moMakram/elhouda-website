<?php
session_start();
require_once('connec.php');

echo('
<html>
<head>
</head>
<body>
');

if (isset($_SESSION['admin_session']) ) {


$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['updatepictures']=='1'){


  if ($_FILES["file"]["error"] > 0)
    {
       /// echo "Error Code: " . $_FILES["file"]["error"];
       //// echo "<br />";
    }
    else
    {
       /* echo "Uploaded File Name: " . $_FILES["file"]["name"];
        echo "<br />";
        echo "File Type: " . $_FILES["file"]["type"];
        echo "<br />";
        echo "File Size: " . ($_FILES["file"]["size"])." bytes";
        echo "<br />";
        echo "Temp file name: " . $_FILES["file"]["tmp_name"];
        echo "<br />";*/

        if (file_exists("photo/" . $_FILES["file"]["name"]))
        {
            ///echo "A file with the name " . $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "photo/" . $_FILES["file"]["name"]);
            ///echo "The file was stored in: " . "sheet/" . $_FILES["file"]["name"];
        }
    }
	   $imname =  $_FILES["file"]["name"];
	   $dir = "photo/".$_FILES['file']['name'];



if($_FILES["file"]["size"]=='')
{
$result = mysql_query(" update video set ordere ='$_POST[ordere]'  , name ='$_POST[name]' , showe = '$_POST[showe]'
  where id='$_POST[id]' " );
}else{

$result = mysql_query(" update video set ordere ='$_POST[ordere]'  , name ='$_POST[name]' , file ='$dir' , showe = '$_POST[showe]'
  where id='$_POST[id]' " );

}

if($result)
{

echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">

window.location ="deleteorupdate_product.php";
alert ("تم التعديل بنجاح");
</script>
</body>
</html>
');
}

else
{

echo("error");
}


}else{

echo('
<script type="text/javascript">
alert ("غير مسموح لك بالدخول هنا");
window.location ="control.php";
</script>
');

}

}else{

////header("location:login.php");


echo('
<script type="text/javascript">

window.location ="login.php";
</script>
');


}
echo('

</body>
</html>');

?>




