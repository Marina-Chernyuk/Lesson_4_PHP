<?php
  for ($i = 0; $i < count($small_pic_arr); $i++) {
    echo "<a class='photo' href='". $original_pic_path . $small_pic_arr[$i] . "' target =\"_blank\"><img src='". $small_pic_path . $small_pic_arr[$i].  "' width=\"200\" height=\"150\" ></a>";
  }
?>