<?php
$manh=$_GET['xoanhahang'];
include('dbconect.php');
$sql=" DELETE from nhahang where manh='$manh' ";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=29";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=29";
    </script>
  <?php
} ?>