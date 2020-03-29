<?php
  // Mở file mới ở chế độ ghi.
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = "Nguyen Hong\n";
  // Ghi nội dung trong biến txt xuống file (newfile.txt)
  fwrite($myfile, $txt);
  $txt = "Nhat Quang\n";
  fwrite($myfile, $txt);
  // Đóng file.
  fclose($myfile);
?>