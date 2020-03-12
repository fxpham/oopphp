<?php
//Kết nối database
$con = mysqli_connect("localhost","root","","c5_bt1_user");

//Truy vấn dữ liệu
$sql="SELECT * FROM dangnhap";
if(mysqli_query($con,$sql)) echo "Kết nối thành công"; else "Thất bại";


echo "<br/>";
/*
while($value = mysql_fetch_array($sql))
{
	echo $value["username"]."<br/>";
	echo $value["email"]."<br/>";
}
*/
?>

