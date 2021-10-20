<?php

// устанавливаем директорию файлов
define("imagesPath", 'images/');
$small_pic_path = imagesPath . "small_pic/";
$original_pic_path = imagesPath . "original_pic/";

//  с помощью array_splice отрезаем первые 2 элемента и читаем содержимое папки small_pic
//  scandir — Получает список файлов и каталогов, расположенных по указанному пути
$small_pic_arr = array_splice(scandir($small_pic_path), 2);
?>