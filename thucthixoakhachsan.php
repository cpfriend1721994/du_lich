<?php
$maks=$_GET['xoa'];
include('dbconect.php');
$sql=" DELETE from khachsan where maks='$maks' ";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=23";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=23";
    </script>
  <?php
} ?>