<?php 
//Kết nối server - lựa chọn csdl
$con = mysqli_connect("localhost","root","","ql_nhahang");

//Truy vấn dữ liệu
$sql = "select * from mon_an";
if(mysqli_query($con,$sql)) echo "Kết nối thành công"; else "Thất bại";
?>