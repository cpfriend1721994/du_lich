<?php
$mahdv=$_GET['xoahdv'];
include('dbconect.php');
$sql=" DELETE from huongdanvien where mahdv='$mahdv' ";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=31";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=31";
    </script>
  <?php
} ?>