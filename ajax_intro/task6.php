<?php include 'connect.php' ?>

<html>
<head>

<meta charset="utf-8"/>
</head>
<body>

<?php
if(isset($_POST['result'])) {$result=$_POST['result']; if ($result=='') {unset($result);} }
if(isset($_POST['name'])) {$name=$_POST['name']; if ($name=='') {unset($name);} }

$result = mysql_real_escape_string($result);
$name = mysql_real_escape_string($name);
 
if (isset($result) && isset($name)){    
   $mys=mysql_query("INSERT INTO task6 (result, name) VALUES ('$result','$name')");
    if ($mys=='true') {
        echo "Дані внесено!";            }
    else {
        echo "error";
    }
    }
else {
    echo "Немає заповнених даних";
}
?>
</body>
</html>