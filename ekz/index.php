<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Вступительные экзамены абитуриентов</title>
<style>
body{
  background:#FFE4B5; /* Меняется фон экрана, выбирается здесь */
}

#wrapper{ /* Оболочка страницы сайта */
  width: 1500px; /* Меняется ширина страницы */
  margin: 0 auto;
  background:#c0c0c0; /* Меняется задний фон страницы */
}

/* Шапка сайта */

#header{
position:relative; /* Задаём блоку относительное позиционирование для того, чтобы затем размещать, в нём другие элементы и позиционировать относительно его границ поверх фоновой картинки и заголовка */
  height: 100px; /* Высота шапки */
  background-color: #ffffff; /* Фон шапки */
   margin-bottom: 5px; /* Нижний отступ шапки от остального контента */
  border-radius: 5px; /* Закругляются углы блока */
  box-shadow: rgba(0,0,0,0.5) 0px 1px 3px; /* Тень. Визуально приподнимает блок над оболочкой */
}
h1{ /* Заголовок сайта */
  margin:0px 0 10px 40px; /* Заголовок двигается верх-вправо-вниз-влево. */
  color:#464451; /* Цвет заголовка */
}
.nomer{ /*Подзаголовок (номер телефона)*/
  position:absolute; /* Позиционируем абсолютно подзаголовок, относительно границ блока header. Также можно разместить в шапке сайта ещё другие картинки и абзацы поверх фоновой картинки и заголовка */
  top:5px; /* Двигается вверх-вниз */
  left:1280px; /* Двигается вправо-влево */
  font-size: 25px; /* Размер букв подзаголовка */
  font-weight:bold; /* Жирный */
  color:#464451; /* Цвет букв подзаголовка */
}

/* Сайдбар (колонка справа) */

#sidebar{ /* Блок сайдбара */
  background-color: #ffffff; /* Фон блока */
  width: 180px; /* Ширина блока */
  padding: 10px; /* Отступ текста от краёв */
  float: right; /* Размещаем блок справа от других элементов, наплывание или обтекание справа). Если делать сайдбар слева, то значение right меняем на left */
  border-radius: 5px; /* Закругляем углы блока */
  box-shadow: rgba(0,0,0,0.5) 0px 1px 3px; /* Задаём блоку тень */
}
.marcer{ /* Галочки маркеры меню */
  float: left; /* Размещаем слева от текста */
  margin: 5px 5px 0 0; /* Двигаются вверх-вправо-вниз-влево */
}

/* Контент (статья) */

#content{ /* Блок контента */
  margin-bottom: 5px; /* Отступ блока статьи от блока подвала */
  width: 1480px; /* Ширина статьи */
  padding: 10px; /* Отступ текста от краёв блока */
  background: #ffffff; /* Фон статьи */
  border-radius: 5px;
  box-shadow: rgba(0,0,0,0.5) 0px 1px 3px;
}
.left{ /* Картинка в тексте слева */
  float: left;
  margin: 30px 7px 7px 7px;
}
.right{ /* Картинка в тексте справа */
  float: right;
  margin: 7px 0 7px 7px;
}
/* Подвал */

#footer{ /* Блок подвала */
  height:80px; /* Высота блока подвала */
  background-color: #ffffff; /* Фон блока подвала */
  margin-bottom: 10px; /* Отступ снизу */
  border-radius: 5px; /* Закруглённые углы */
  box-shadow: rgba(0,0,0,0.5) 0px 1px 3px; /* Тень блока */
}
.clear{ /* Запрет наплывания. Устанавливается для того, чтобы блок контента, при заполнении текстом и изображениями не наплывал на подвал */
  clear: both;
}
.fon{ /* Номер телефона */
  float:right;
  margin:20px 30px 0 20px;
}
.mail{ /* Адрес E-mail */
  float:right;
 margin:20px 0 0 60px;
}
</style>
</head>
<body>
  <br>
  <div id="wrapper"> <!--Оболочка страницы-->
<!--Шапка сайта-->
    <div id="header">
        <br>
        <h1 align="center">Вступительные экзамены абитуриентов</h1>
    </div>
<!--Основной контент (статья)-->
    <div id="content">
<!--Заголовок статьи-->
        <h3>Учасники экзамена</h3>
<?php
/*Определяем переменные для хранения адреса хоста, названия базы данных, таблицы базы данных, имени и пароля пользователя
*/
include "connect.php";
 
$query = "SELECT * FROM `abiturients`";
 
//Выполняем запрос с сохранением идентификатора результата
$b = mysqli_query($connect, $query);
 
//Печатаем шапку таблицы
print ("<h1 align=center>Абитуриенты</h1>
<table border=1  align=center width=90% cellpadding=5 valign=top>
<tr align=center>
<td width=8%><b>Код абитуриента</b></td>
<td><b>Фамилия</b></td>
<td><b>Имя</b></td>
<td><b>Отчество</b></td>
<td><b>Дата рождения</b></td>
<td><b>Адрес</b></td>
<td><b>E-mail</b></td>
<td><b>Пароль</b></td>
</tr>");

//Печатаем содержимое таблицы
while ($a = mysqli_fetch_array  ($b))
{
$Kod_Abiturienta=$a['Kod_Abiturienta'];
$Familia = $a['Familia'];
$Ima = $a['Ima'];
$Otchestvo = $a['Otchestvo'];
$Data_Rojdenia = $a['Data_Rojdenia'];
$Adres = $a['Adres'];
$Email = $a['Email'];
$Password = $a['Parol'];
print ("<tr valign=top>
<td width=8% align=center>$Kod_Abiturienta</td>
<td align=center>$Familia</td>
<td align=center>$Ima</td>
<td align=center>$Otchestvo</td>
<td align=center>$Data_Rojdenia</td>
<td align=center>$Adres</td>
<td align=center>$Email</td>
<td align=center>$Password</td>
</tr>");
}
print ("</table>");

mysqli_close($connect);
?>
    </div>
<!--Запрет наплывания-->
  <div class="clear"></div>
<!--Подвал-->
    <div id="footer">
      <p class="fon"><strong>Телефон:<br> 541-22-36</strong> </p>
      <p class="mail"><strong>E-mail<br>Artem@mail.ru</strong></p>

    </div>
  </div>
</body>
</html>