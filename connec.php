<?php


define('DBUSER','root');
define('DBPW','');
define('DBHOST','localhost');
define('DBNAME','zeraa');


if($dbc = mysql_connect(DBHOST,DBUSER,DBPW))
{
$query = mysql_query("SET NAMES 'utf8'");
if(!mysql_select_db (DBNAME))

  {

trigger_error("Could not select the database <br/> ");

exit();

   }


}else{
trigger_error("Could not connect to MYSQL <br/> ");
exit();
}




function escape_data2($data)
{

if(function_exists('mysql_real_escape_string'))
{

global $dbc;
$data = mysql_real_escape_string(trim($data),$dbc);
$data = strip_tags($data);

}else{
$data = mysql_escape_string(trim($data));
$data = strip_tags($data);
}

return $data;


}





?>