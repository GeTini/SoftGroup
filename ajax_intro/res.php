<?php
$ppa = $_POST['F'];
$daysOfTheYear = $ppa[1]['value'];
$k = $ppa[0]['value'];
$i = 2;
$y = $k*2+2;
$Counter = 1;
$array = array();
$weekend = array();
$weekendDay = 6;
$day = 6;
while ($weekendDay<=$daysOfTheYear){
	if ($weekendDay > $daysOfTheYear){break;}
	$weekend[] = $weekendDay;
	$weekendDay++;
	$weekend[] = $weekendDay;
	$weekendDay += $day;
}
echo '<pre>';
print_r ($weekend);
echo '</pre>';
while ($i<=$y){
	if ($i >= $y){break;}
	$strike = $ppa[$i]['value'];
	$array[] = $strike;
	$i++;
	$interval = $ppa[$i]['value'];
	$i++;
		while ($strike <= $daysOfTheYear){
		$strike = $strike + $interval;
		if ($strike > $daysOfTheYear){break;}
		$array[] = $strike;
		$dayCounter++;
	}
}
$input = array_unique($array);
$strikearray = array_diff($input, $weekend);
$strikeAmount = count($strikearray);
echo '<pre>';
print_r ($strikearray);
echo '</pre>';
echo 'Всього страйків за рік - ' . $strikeAmount;
?>