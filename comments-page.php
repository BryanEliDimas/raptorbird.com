<form action="post_comment.php" method="post">
<table>
<tr><td>Comment On: </td><td><input type="text" name="comment_on" size=40 readonly="readonly" value="<?php print md5($_SERVER['PHP_SELF']); ?>" /></td></tr>
 
<tr><td>Comment: </td><td><textarea name="comment" cols=30></textarea></td></tr>
 
<tr><td>Comment By: </td><td><input type="text" size=40 name="comment_by" /></td></tr>
 
<tr><td></td><td><input type="submit" value="Submit" /></td></tr>
</table>
</form>

<?php
/* U need to change below fields */
$db_sitename="raptorbird";
$db_hostname="localhost";
$db_username="root";
$db_password="root";
$no_of_comments="10";
 
/* Leave the script below as it is */
mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_sitename);
$pagename=md5($_SERVER['PHP_SELF']);
$query=mysql_query("Select * from comments where comment_on='$pagename' ORDER BY id DESC LIMIT 0, $no_of_comments");
echo "<hr />";
 
echo "<h3>Latest Comments</h3>";
while($fetch=mysql_fetch_array($query)) {
echo "<p>".$fetch['comment']."<br/><sub><b>Comment by: </b>".$fetch['comment_by']."</sub><hr /><p>";
}
mysql_close();
?>