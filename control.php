<?php
session_start();

include('connec.php');


echo(' 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحة التحكم الرئيسية</title>
<link href="css_control/controls.css" rel="stylesheet" type="text/css" media="all" />
<link href="css_control/responsive_control.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
');
if (isset($_SESSION['admin_session']) ) {

echo('
<div id="contain">
<div id="header"></div>

<div id="control_word"></div>


<div id="body6">
<div id="welcome">
<div id="welword"> Welcome</div>
</div>

<div id="leftside">


<a href="add_product.php"><div id="butt"><div id="buttword">أضافة قسم المنتجات</div></div></a>
<a href="deleteorupdate_product.php"><div id="butt"><div id="buttword">التعديل على قسم المنتجات</div></div></a>
<a href="add_propic.php"><div id="butt"><div id="buttword">أضافة صور المنتجات</div></div></a>
<a href="deleteorupdate_propic.php"><div id="butt"><div id="buttword">تعديل صور المنتجات</div></div></a>


<a href="add_videosec.php"><div id="butt"><div id="buttword">أضافة قسم فيديو</div></div></a>
<a href="deleteorupdate_videosec.php"><div id="butt"><div id="buttword">التعديل على قسم الفيديو</div></div></a>
<a href="add_video.php"><div id="butt"><div id="buttword">أضافة فيديو</div></div></a>
<a href="deleteorupdate_video.php"><div id="butt"><div id="buttword">تعديل الفيديو</div></div></a>
<!--
<a href="add_section.php"><div id="butt"><div id="buttword">أضافة قسم </div></div></a>
<a href="deleteorupdate_section.php"><div id="butt"><div id="buttword">التعديل على الاقسام</div></div></a>
<a href="add_egytext.php"><div id="butt"><div id="buttword">وصف المواد المصرية</div></div></a>
<a href="deleteorupdate_mat.php"><div id="butt"><div id="buttword">تعديل وصف المواد</div></div></a>
<a href="add_mat.php"><div id="butt"><div id="buttword">أضافة المواد المصرية</div></div></a>
<a href="deleteorupdate_egymat.php"><div id="butt"><div id="buttword">التعديل على المواد</div></div></a>
<a href="add_services.php"><div id="butt"><div id="buttword">أضافة الخدمات</div></div></a>
<a href="deleteorupdate_services.php"><div id="butt"><div id="buttword">التعديل على الخدمات</div></div></a>
<a href="add_protext.php"><div id="butt"><div id="buttword">أضافة وصف المنتجات</div></div></a>
<a href="deleteorupdate_protext.php"><div id="butt"><div id="buttword">التعديل على وصف المنتجات</div></div></a>
<a href="add_product.php"><div id="butt"><div id="buttword">أضافة قسم منتجات</div></div></a>
<a href="deleteorupdate_product.php"><div id="butt"><div id="buttword">التعديل على القسم</div></div></a>-->

<a href="logout.php"><div id="butt"><div id="buttword">تسجيل الخروج</div></div></a>
</div>


<div id="rside">
<a href="Add pictures.php"><div id="butt2"><div id="buttword">أضافة الصور </div></div></a>
<a href="delete or update pictures.php"><div id="butt2"><div id="buttword">التعديل على الصور </div></div></a>
<a href="About_control.php"><div id="butt2"><div id="buttword">أضافة نبذه عن الشركه </div></div></a>
<a href="deleteorupdate_aboutus.php"><div id="butt2"><div id="buttword">تعديل النبذه </div></div></a>


<a href="Add address.php"><div id="butt2"><div id="buttword">أضافه عنوان </div></div></a>
<a href="delete or update address.php"><div id="butt2"><div id="buttword">تعديل العنوان </div></div></a>
<a href="deleteorupdate_question.php"><div id="butt2"><div id="buttword">استفسارات الزائرين</div></div></a>
<a href="deleteorupdate_regist.php"><div id="butt2"><div id="buttword">المسجلين فى الموقع</div></div></a>
<!--
<a href="add_project.php"><div id="butt2"><div id="buttword">أضافة المشاريع </div></div></a>
<a href="deleteorupdate_project.php"><div id="butt2"><div id="buttword">التعديل على المشاريع </div></div></a>
<a href="add_propic.php"><div id="butt2"><div id="buttword">أضافة صور المنتجات </div></div></a>
<a href="deleteorupdate_propic.php"><div id="butt2"><div id="buttword">التعديل على صور المنتجات </div></div></a>
<a href="add_branches.php"><div id="butt2"><div id="buttword">أضافة الفروع </div></div></a>
<a href="deleteorupdate_branches.php"><div id="butt2"><div id="buttword">تعديل الفروع </div></div></a>
<a href="deleteorupdate_reg.php"><div id="butt2"><div id="buttword">المسجلين فى الموقع</div></div></a>-->
</div>






<!--<center>
 <font size="6" color="#993300"><a href="logout.php"> تسجـيـل الخــروج</a>  </font>
</center> -->





</div>
<div id="fotter5"></div>
</div>  <!-- close the container -->
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
