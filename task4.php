<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>PHPTask</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">

	<!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<!-- Lobster font -->
	<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,latin-ext" rel="stylesheet">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container"> <!-- header container -->
	<div class="header row">
		<div class="logo col-xs-12 col-md-4"></div>
		<div class="text col-xs-12 col-md-4">
			<h1>SoftGroup</h1>
			<p>Тестове завдання</p>
		</div>
		<div class="col-xs-12 col-md-4">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="navbar-nav nav">
							<li><a href="index.php">Головна</a></li>
							<li><a href="author.php">Автор</a></li>
							<li><a href="https://www.softgroup.ua" target="_blank">Soft Group</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div> <!-- end header container -->
<div class="container"> <!-- main container -->
	<div class="row">
	  <div class="col-sm-4">
		<div class="sidebar-nav">
		  <div class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <span class="visible-xs navbar-brand">Вертикальне меню</span>
			</div>
			<div class="navbar-collapse collapse sidebar-navbar-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="#">Перейти на сторінку:</a></li>
				<li><a href="task1.php">Завдання 1</a></li>
				<li><a href="task2.php">Завдання 2</a></li>
				<li><a href="task3.php">Завдання 3</a></li>
				<li class="active"><a href="task4.php">Завдання 4</a></li>
				<li><a href="task5.php">Завдання 5</a></li>
				<li><a href="task6.php">Завдання 6</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</div>
	  </div>
	  <div class="col-sm-8">
		<div class="col-sm-12">
			<h3>Завдання 4:</h3>
			<div>
				Політичне життя однієї країни дуже жваве. У країні діє K політичних партій, кожна з яких регулярно оголошує національний страйк. Дні, коли хоча б одна з партій оголошує страйк, за умови, що це не субота або неділя (коли і так ніхто не працює), завдають великої шкоди економіці країни. i-та партія оголошує страйки строго кожні bi днів, починаючи з дня з номером ai. Тобто i-та партія оголошує страйки в дні ai, ai + bi, ai + 2bi і т.д. Якщо в якийсь день кілька партій оголошує страйк, то це вважається загальнонаціональним страйком. У календарі країни N днів, пронумерованих від 1 до N. Перший день року є понеділком, шостий і сьомий дні року - вихідні, тиждень складається з семи днів.
			</div>
			<fieldset>
				<legend>Форма завдання 4:</legend>
				<form role="form" name="form1"  method="post" action="" id="form1">
					<div class="form-group">
						<label for="K">Введіть кількість політичних партій більше 1, менше 100:</label>
						<input type="text" id="K" name="K" class="form-control" value="2">
					</div>
					<div class="form-group">
						<input type="submit" value="Створити">
					</div>
				
				<?php 
					$k = $_POST['K'];
					$y = 1;
					printf ("<div class='form-group'>
						<label for='N'>Введіть кількість днів у році більше 1, менше 1 000 000:</label>
						<input type='text' id='N' name='N' class='form-control' value='2'>
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
				
				<script>            
 
					  // добавлення результату
					  
					$(document).ready(function(){  
								   $("#result").click(function(){
									var fields = $(":input").serializeArray();
										   $.ajax({  
												url:"ajax_intro/res.php",  
												method:"POST",  
												data:{z:'1', F:fields},  
												dataType:"html",  
												success:function(data){  
													 $("#res").html(data);  
												}
										   });  
									});
									
					});
					</script>
				
						<div id="res" class="form-group"></div>
				</form>
			</fieldset>		
		</div>
	  </div>
	</div>
</div> <!-- end main container -->
<div class="container"> <!-- footer container -->
	<div class="footer row">
		<div class="col-xs-12">
			<center>
				<h4>Автор: Мангер Юрій ©</h4>
				<p>2016</p>
			</center>
		</div>
	</div>
</div> <!-- end footer container -->
</body>
</html>