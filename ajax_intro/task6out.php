<?php include 'connect.php' ?>

<?php
	$result=mysql_query("SELECT * FROM task6 ");
	$myrow=mysql_fetch_array($result);
	do{
	echo '<pre>';
	print_r($myrow);
	echo '</pre>';
	}
	while ($myrow=mysql_fetch_array($result));
?>