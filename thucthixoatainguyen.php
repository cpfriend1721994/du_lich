<?php
$matn=$_GET['xoatainguyen'];
include('dbconect.php');
$sql=" DELETE from tainguyendulich where matn='$matn' ";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=32";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=32";
    </script>
  <?php
} ?>