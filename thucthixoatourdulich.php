<?php
$matour=$_GET['xoatourdulich'];
include('dbconect.php');
$sql=" DELETE from tourdulich where matour='$matour' ";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=28";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=28";
    </script>
  <?php
} ?>