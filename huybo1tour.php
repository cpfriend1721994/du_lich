<?php
session_start();
	if(isset($_GET['huybotour']))
	{
		$t=$_GET['huybotour'];
		unset($_SESSION['tour'][$t]);
	}
?>
<script language="javascript">
			window.location="index.php?left=6";
     </script>