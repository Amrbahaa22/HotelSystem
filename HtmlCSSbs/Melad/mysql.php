<?php
$hosname="localhost";
$username="root";
$dbName='HotelSystem';
if(mysql_connect($hosname,$username,"mysql")&&mysql_select_db($dbName))
{
    echo "Connected Successfully",'</br>';
}
else
{
  die(mysql_error());
}
?>
