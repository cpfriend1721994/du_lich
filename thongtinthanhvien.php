<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
$u=$_SESSION['username'];
?>
<?php
include("dbconect.php");
$sql="select * from thanhvien where username='$u'";
$result=mysql_query($sql);
$rows=@mysql_fetch_array($result);
?>
<form name="form1" method="post">
  <table width="600" border="1" class="tanle">
  <tr>
    <td rowspan="8" width="300"><img src="anhtv/<?php echo $rows['anh'];?>" width="300" height="300"></td>
    <td width="223" align="center" class="chu"><b>Tên thành viên</b></td>
    <td width="55" align="center" class="chu"><a href="index.php?suathanhvien=<?php echo $rows['username'];?>">Sửa</a></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $rows['tentv'];?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" class="chu"><b>Ngày sinh</b></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $rows['ngaysinh'];?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" class="chu"><b>Địa Chỉ</b></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $rows['diachi'];?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" class="chu"><b>Số điện thoại</b></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $rows['sodt'];?></td>
  </tr>
</table>

</form>