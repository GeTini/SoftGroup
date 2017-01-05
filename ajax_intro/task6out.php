<?php include 'connect.php' ?>

<?php
	$result=mysql_query("SELECT * FROM task6 ORDER BY result DESC LIMIT 1");
	$myrow=mysql_fetch_array($result);
	$ex = array();
	$ex [] = $myrow['username'];
	printf ("</br>1 місце. %s (%s)</br>", $myrow['username'], $myrow['result']);
	$result=mysql_query("SELECT * FROM task6 ORDER BY result DESC");
	$myrow=mysql_fetch_array($result);
	$i = 2;
	do{
		if (in_array($myrow['username'], $ex, true)) {}
			else {$ex [] = $myrow['username'];
			printf ("</br>$i місце. %s (%s)</br>", $myrow['username'], $myrow['result']);
			$i++;
			if ($i>=4){break;}}
	}
	while ($myrow=mysql_fetch_array($result));
?>