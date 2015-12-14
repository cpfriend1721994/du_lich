<?php 
	$hd=$_POST['txthd'];
	$loai=$_POST['cbbloai'];
	$ct=$_POST['txtct'];
	$id_hd=$_POST['txtid_hd'];
	include("dbconect.php");
	$sql="update cthoatdong set ten1hd='$hd',mahd='$loai',chitiet='$ct',anh='{$_FILES['upload']['name']}' where id_hd=$id_hd";
	$result=mysql_query($sql);
	$filename=$_FILES['upload']['name'];
	if($result)
	{
		$filename=$_FILES['upload']['name'];
		if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhhoatdong/$filename"))
		{
		?>
              	<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php";
                </script>
                <?php
		}
				?>
				<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?suahoatdong=<?php echo $rows['id_hd'];?>";
                </script>
                <?php
	}
	else
	{
			?>
   				 <script language="javascript">
					window.alert("Sửa thông tin không thành công");
					window.location="index.php";
				</script>
                <?php
	}
?>