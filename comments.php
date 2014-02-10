<?php
/* U need to change below fields */
$db_sitename="raptorbird";
$db_hostname="localhost";
$db_username="root";
$db_password="root";
 
/* Leave the script below as it is */
mysql_connect($db_hostname, $db_username, $db_password);
if(mysql_query("CREATE DATABASE $db_sitename"))
{
mysql_select_db($db_sitename);
mysql_query("CREATE TABLE comments
 (id INTEGER AUTO INCREMENT NOT NULL,
 comment_on VARCHAR(100) NOT NULL,
 comment_by VARCHAR(100) NOT NULL,
 comment TEXT NOT NULL)");
}
else
{
echo "error in script or check if database service has been provided to you by your webhost";
}
mysql_close();
?>
