
<?php
include './config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Задание 1-2</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<!-- Задание 1-2: Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит все
 картинки в уменьшенном виде и форму для загрузки нового изображения. При клике на фотографию она должна открыться
 в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width. При загрузке изображения
 необходимо делать проверку на тип и размер файла. -->
<body>
<div style="background-image: url('images/fon.jpg'); background-size: 100% 100%;">
<h1>ГАЛЕРЕЯ</h1>
<div class="gallery">
  <?php
  include './templates/image.php'; // используем метод подклбчения include, т.к. необхоимо, 
  //чтобы после каждой загрузке фото, скрипт опять отрабатывал
?>
</div>

<div class ="upload_form">
    <form  enctype="multipart/form-data" method="post"> 
    <input name="picture" type="file" />
    <input type="submit" value="Загрузить" />
    </form>

<?php
include './engine/uploads.php';
?>
</div>

</body>
</html>



