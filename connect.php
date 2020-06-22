<?php
$conn_string="host=ec2-52-72-65-76.compute-1.amazonaws.com port=5432 dbname=d3fc79d2pdjroo user=
jdqdaawzepxjhc password=ea16d9afcc73c10743bc59243b171e951803f767ff027e931e51d3c27bc7b218";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE username='".$username."' AND pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
