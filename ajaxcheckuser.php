<?php
$ten=$_GET["ten"];
include ('dbconect.php');
$sql= "select * from thanhvien where username like '$ten'";
$result=mysql_query($sql,$link);
if(mysql_num_rows($result)>0)
{
	echo '<font color="#FF0000">Tài khoản này đã có người sử dụng!</font>';
}
else
	echo '<font color="#0033FF">Bạn có thể dùng tài khoản này! </font>';
	
?>
