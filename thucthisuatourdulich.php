<?php 
	$n=$_POST['txtname'];
	$ks=$_POST['cbbkhachsan'];
	$gia=$_POST['txtgiatien'];
	$songay=$_POST['txtsongay'];
	$hdv=$_POST['cbbhdv'];
	$loaitour=$_POST['cbbloaitour'];
	$hanhtrinh=$_POST['txthtrinh'];
	$m=$_POST['txtmatour'];
	include("dbconect.php");
	$sql="update tourdulich set tentour='$n',hanhtrinh='$hanhtrinh',giatien='$gia',maks='$ks',songay='$songay',maloaitour='$loaitour', anh='{$_FILES['upload']['name']}' where matour='$m'";
	$result=mysql_query($sql);
	$filename=$_FILES['upload']['name'];
	if($result)
	{
		$filename=$_FILES['upload']['name'];
		if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhtourdulich/$filename"))
		{
		?>
              	<script language="javascript">
					window.location="index.php?tour=<?php echo "$m";?>";
                </script>
                <?php
		}
				?>
				<script language="javascript">
					window.location="index.php?tour=<?php echo "$m";?>";
                </script>
                <?php
	}
	else
	{
			?>
   				 <script language="javascript">
					window.location="<?php echo "$m";?>";
				</script>
                <?php
	}
?>