<?php 

require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="singin.php" method="POST" onsubmit="return validate_form();">
		<label>Авторизация</label>
		<input type="email" name="Email" placeholder="Введите свою почту" required>
		<input type="password" name="Parol" placeholder="Введите свой пароль" required> <br><br>
		<button type="submit">Войти</button>
		<p>
        	<a href="registr.php">Регистрация</a>
        </p>
	</form>
	<script type="text/javascript">
		function validate_form(){
			alert("Вы успешно авторизовались")
		}
	</script>
</body>
</html>