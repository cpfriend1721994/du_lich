<link rel="stylesheet" type="text/css" href="css/style.css" />
<form action="thamgiatour" method="post">
<table width="600" border="0" bgcolor="#CCCCCC">
  <tr>
    <td colspan="2" class="chu" bgcolor="#CC3300">Đăng ký tham gia chương trình du lịch</td>
    </tr>
  <tr>
    <td colspan="2">Thông tin đặt dịch vụ</td>
  </tr>
  <tr>
    <td width="162">Tên Tour</td>
    <td width="428">
    	<?php
			require_once('dbconect.php');
			$dattour = $_GET["dattour"];
			$sql="select * from tourdulịch where matour='$datour'";
			$result=mysql_query($sql);
			$rows=@mysql_fetch_array($result);
			echo $rows['tentour'];
		?>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</form>