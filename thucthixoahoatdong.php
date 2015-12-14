<?php
$id=$_GET['xoahoatdong'];
include('dbconect.php');
$sql="DELETE from cthoatdong where id_hd='$id' ";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=30";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=30";
    </script>
  <?php
} ?>