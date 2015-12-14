<?php
if(isset($_POST['submit']))
{
	session_start();
	foreach($_POST['qty'] as $key=>$value)
	{
		if( ($value == 0) and (is_numeric($value)))
		{
			unset ($_SESSION['tour'][$key]);
		}
		elseif(($value > 0) and (is_numeric($value)))
		{
			$_SESSION['tour'][$key]=$value;
		}
	}
	?>
    <script language="javascript">
		window.location="index.php?left=6";
    </script>
    <?php
}
?>