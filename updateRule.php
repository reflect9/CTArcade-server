<?php
// input: user_id, game_id, strategy string
// action : store strategy of the user in the DB
$con = mysql_connect("localhost","takyeonl_ct","cmsc838");
if (!$con) {
	die('Could not connect: '. mysql_error());
}
mysql_select_db("takyeonl_ctarcade", $con);
$query = "INSERT INTO rule (owner,game,data) VALUES('".$_GET['user_id']."','".$_GET['game_id']."','".$_GET['strategy']."')";
echo $query;
if( !mysql_query($query)) {
	die('Error: '. mysql_error());
}
echo "success!";
mysql_close($con);
?>