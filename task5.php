<?php session_start(); ?>
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
				<li><a href="task4.php">Завдання 4</a></li>
				<li class="active"><a href="task5.php">Завдання 5</a></li>
				<li><a href="task6.php">Завдання 6</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</div>
	  </div>
	  <div class="col-sm-8">
		<div class="col-sm-12">
			<h3>Завдання 5:</h3>
			<div>
				<p>Задано текст. Словом вважається послідовність непробільний символів, які йдуть підряд. Слова розділені одним або більшим числом пробілів або символами кінця рядка. Для кожного слова з цього тексту підрахуйте, скільки разів воно зустрічалося в цьому тексті раніше. Використайте словники.</p>
				<b>Приклад:</b>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Ввід</th>
            <th>Вивід</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>one two one two three</td>
            <td>0 0 1 1 0</td>
        </tr>
        <tr>
            <td>She sells sea shells on the sea shore;<br>
            The shells that she sells are sea shells I'm sure.<br>
            So if she sells sea shells on the sea shore,<br>
            I'm sure that the shells are sea shore shells.<br>
            </td>
            <td>0 0 0 0 0 0 1 0 0 1 0 0 1 0 2 2 0 0 0 0 1 2 3 3 1 1 4 0 1 0 1 2 4 1 5 0 0</td>
        </tr>
    </tbody>
</table>
			</div>
			<fieldset>
				<legend>Форма завдання 5:</legend>
				<form role="form" method="POST" action="">
					<div class="form-group">
						<label for="intN">Введіть текст:</label>
						<input type="text" id="intN" name="intN" class="form-control" placeholder="Введіть текст">
					</div>
					<div class="form-group">
						<input type="submit" value="Створити">
					</div>
				
				<?php
					$originalText = $_POST['intN'];
					
					$wordArray = preg_split('/[\s,]+/', $originalText);

					foreach ( $wordArray as $currentkey => $currentWord ) {

						$wordCounter = -1;

						foreach ( $wordArray as $previouskey => $previousWord ) {

							if ( $previousWord == $currentWord )
							
								$wordCounter++;

							if ( $previouskey == $currentkey )
								break;

						}

						echo $wordCounter . ' ';

					}

				?>
				
						<div id="result" class="form-group"></div>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>