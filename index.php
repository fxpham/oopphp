<?php
//Kết nối database
mysql_connect('localhost','root','');
//lựa chọn database
mysql_select_db('c5_bt1_user');

?>

<?php
$sql=mysql_query('SELECT * FROM dangnhap');
while($value=mysql_fetch_array($sql))
{
	echo $value['username'].'<br/>';
	echo $value['email'].'<br/>';
}
?>