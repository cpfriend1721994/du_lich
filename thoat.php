<?php
		if(!isset($_SESSION['username']))
		{?>
			<script language="javascript">
				window.location="index.php";
        	</script>
            <?php
			exit();
		}
		else
		{
			$_SESSION=array();
			/*loai bo du lieu tren may chu*/
			session_destroy();
			?>
            <script language="javascript">
			window.alert('Bạn đã thoát ra');
			window.location="index.php";
        	</script>
            <?php 
		}
		
?>
