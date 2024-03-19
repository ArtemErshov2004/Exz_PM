<?php 

require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="create.php" method="POST" onsubmit="return validate_form();">
		<label>Регистрация</label>
		<input type="text" name="Familia" placeholder="Введите свою фамилию" required>
		<input type="text" name="Ima" placeholder="Введите свое имя" required>
		<input type="text" name="Otchestvo" placeholder="Введите свое отчество" required>
		<input type="date" name="Data_Rojdenia" placeholder="Введите дату рождения" required>
		<input type="text" name="Adres" placeholder="Введите свой адрес" required>
		<input type="email" name="E-mail" placeholder="Введите свою почту" required>
		<input type="password" name="Parol" placeholder="Введите свой пароль" required> <br><br>
		<button type="submit">Зарегестрироваться</button>
		
		<p>
            <a href="avtoriz.php">Авторизация</a>
        </p>
	</form>
	<script type="text/javascript">
		function validate_form(){
			alert("Регистрация прошла успешно")
		}
	</script>
</body>
</html>