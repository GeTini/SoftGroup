<?php
$db=mysql_connect("localhost","admin","130913") or die ("die");
$res=mysql_select_db("testtask",$db);
mysql_query("SET names 'utf-8'");
?>