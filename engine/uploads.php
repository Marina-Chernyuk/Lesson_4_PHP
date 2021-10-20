    <?php
$path = 'images/small_pic/'; // выбрала каталог для загрузки, чтобы можно было посмотреть выполнение скриптов

if ($_SERVER['REQUEST_METHOD'] == 'POST') // используем метод POST, чтобы загрузить файл на сервер
{
  if (!@copy($_images['picture']['tmp_name'], $path . $_images['picture']['name']))

 
  echo 'Загрузка не удалась!';
 else
  echo 'Загрузка прошла успешно!';
 
}
?>
