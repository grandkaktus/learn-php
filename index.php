<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>Тестовое задание</title>
   <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>

<header>
	<h1>Тестовое задание</h1>
</header>

<main>
	<h2>Задание 1</h2>
	<p>Реализовать скрипт на php, который определит является ли год високосным. На вход скрипту нужно передавать значение, скрипт должен выдавать один из возможных ответов: ДА, НЕТ, ОШИБКА ВО ВХОДНЫХ ДАННЫХ.</p>

	<p>Реализовать в виде веб-страницы с формой для передачи значения. Обязательно с использованием ajax.	</p>
	
	<form name="form1" action="php/task1.php" method="POST">
		<label>Введите год, в виде 1990 </label>	
		<input name="year" type="text" required placeholder="1990">
	<br>

		<p>Является год високосным? - <span id="answer1"> </span></p>
		
		<button type="button" id="buttonForm1">Выполнить</button>
	</form>

	<h2>Задание 2</h2>
	<p>Написать функцию, которая принимает в качестве аргументов префикс и массив строк и возвращает все строки, начинающиеся с указанного префикса. Необходимо реализовать функцию наиболее оптимальным образом.</p>
	
	<form name="form2" action="php/task2.php" method="POST">
		<label>Введите префикс </label>	
		<input name="pref" type="text" required placeholder="Прив">
	<br>

		<button type="button" id="buttonForm2">Выполнить</button>
	</form>

	<p>Результат:</p>
	<ol id="answer2"> </ol>

	<h2>Задание 3</h2>
	<p>В лофте n хипстерам достались m смузи. При этом все хипстеры - люди вежливые, и поэтому должны выпить одинаковое количество смузи (можно выбросить несколько). Напишите функцию результатом которой будет количество смузи, которое выпьет каждый хипстер.</p>
	
	<form name="form3" action="php/task3.php" method="POST">
		<label>Кол-во хипстеров </label>	
		<input name="hipsters" type="text" required placeholder="3">
	<br>
		<label>Кол-во смузи </label>	
		<input name="smuzy" type="text" required placeholder="22">
	<br>

		<p>Результат - <span id="answer3"> </span></p>
	
		<button type="button" id="buttonForm3">Выполнить</button>
	</form>

</main>

<footer>
	<p>2020 </p>
</footer>

</body>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jsfile.js"></script>

</html>