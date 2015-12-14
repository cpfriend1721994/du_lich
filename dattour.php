<?php
	session_start();
	/*session_register("tour");*/
if(!isset($_SESSION['username']))
{
?>
     <script language="javascript">
			window.alert('Ban phai dang nhap moi co the dat tour');
			window.location="index.php?left=2";
     </script>
<?php
}
else
{
	$dattour = $_GET["dattour"];
	if(isset($_SESSION['tour'][$dattour]))
	{
		$qty = $_SESSION['tour'][$dattour]+1;
	}
	else
	{
		$qty = 1;
	}
	$_SESSION['tour'][$dattour] = $qty;
}
?>
<script language="javascript">
	window.location="index.php?left=6";
</script>
