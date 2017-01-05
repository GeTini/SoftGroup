<?php
$k = $_POST['k'];
$y = 1;
printf ("<div class='form-group'>
	<label for='N'>Введіть кількість днів у році більше 1, менше 1 000 000:</label>
	<input type='text' id='N' name='N' class='form-control' placeholder='Введіть к-сть днів'>
");
while ($y < $k+1):
	printf ("<label for='a$y'> Введіть перший день страйку $y партії: </label>
	<input type='text' id='a$y' name='a$y' class='form-control'></br>
	<label for='b$y'> Введіть частоту страйків $y партії: </label>
	<input type='text' id='b$y' name='b$y' class='form-control'></br>");
	$y++;
endwhile;	
printf ("</div>
	<input type='button' id='result' onclick='result' value='Результат'>");
?>