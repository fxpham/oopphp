<?php
// Mở file ở chế độ đọc.
  $myfile = fopen("./file/newfile.txt", "r") or die("Unable to open file!");
  // Đọc toàn bộ nội dung file
  // echo fread($myfile,filesize("./file/newfile.txt"));
  // Đọc từng dòng
  // feof: Kiểm tra đã cuối file chưa.
  while(!feof($myfile)) {
    // Đọc từng dòng trong file.
    echo fgets($myfile) . "<br>";
  }
  //Đóng file.
  fclose($myfile);
?>