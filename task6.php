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
				<li><a href="task4.php">Завдання 4</a></li>
				<li><a href="task5.php">Завдання 5</a></li>
				<li class="active"><a href="task6.php">Завдання 6</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</div>
	  </div>
	  <div class="col-sm-8">
		<div class="col-sm-12">
			<h3>Завдання 6:</h3>
			<div>
				<p>Змагання з гри «Тетріс-онлайн» проводяться за такими правилами:<br>
					Кожен учасник реєструється на сайті гри під певним ігровим ім'ям. Імена учасників не повторюються.<br>
					Чемпіонат проводиться протягом певного часу. У будь-який момент цього часу будь-який зареєстрований учасник може зайти на сайт чемпіонату і почати залікову гру. Після закінчення гри її результат (кількість балів) фіксується і заноситься до протоколу.<br>
					Учасники мають право грати кілька разів. Кількість спроб одного учасника не обмежується. Остаточний результат учасника визначається по одній грі, кращою для даного учасника. Більш високе місце в змаганнях займає учасник, що показав кращий результат. При рівності результатів більш високе місце займає учасник, раніше показав кращий результат.<br>
					В ході змагань заповнюється протокол, кожен рядок якого описує одну гру і містить результат учасника і його ігрове ім'я. Протокол формується в реальному часі по ходу проведення чемпіонату, тому рядки в ньому розташовані в порядку проведення ігор: чим раніше зустрічається рядок у протоколі, тим раніше закінчилася відповідна цьому рядку гра.<br>
					Напишіть програму, яка за даними протоколу визначає переможця і призерів. Гарантується, що в чемпіонаті бере участь не менше трьох гравців.</p>
				<b>Приклад:</b><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Ввід</th>
            <th>Вивід</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                9<br>
                69485 Jack<br>
                95715 qwerty<br>
                95715 Alex<br>
                83647 M<br>
                197128 qwerty<br>
                95715 Jack<br>
                93289 Alex<br>
                95715 Alex<br>
                95715 M<br>
            </td>
            <td>
                1 місце. Qwerty (197128)<br>
                2 місце. Alex (95715)<br>
                3 місце. Jack (95715)<br>
            </td>
        </tr>
    </tbody>
</table>
			</div>
			<fieldset>
				<legend>Форма завдання 6:</legend>
				<form role="form" method="post" action="">
					<div class="form-group">
						<label for="intN">Введіть результат:</label>
						<input type="text" id="intN" name="intN" class="form-control" placeholder="Введіть результат">
						<input type="text" id="intK" name="intK" class="form-control" placeholder="Введіть ім'я">
					</div>
					<div class="form-group">
						<!--<input type="button" id="send" name="send" value="Внести">-->
						<input type="button" id="out" name="out" value="Результат">
						<div id="result"></div>
					</div>
					
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

					<script>            
					$(document).ready(function(){  
								  /* $("#send").click(function(){
									var N=$("#intN").val();
									var K=$("#intK").val();
									
										   $.ajax({  
												url:"ajax_intro/task6.php",  
												method:"POST",  
												data:{result:N, name:K},  
												dataType:"html",  
												success:function(data){  
													 $("#result").html(data);  
												}
										   });  
									});*/
									
									$("#out").click(function(){
											$.ajax({  
												url:"ajax_intro/task6out.php",  
												method:"POST",  
												data:{},  
												dataType:"html",  
												success:function(data){  
													 $("#result").html(data);  
												}
										   });  
									});
									
					});
					</script>
</body>
</html>