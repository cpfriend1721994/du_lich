<script language="javascript">
function checkInput()
{
	if(document.frmlogin.txtuser.value=="")
	{
		window.alert('Bạn chưa nhập username');
		document.frmlogin.txtuser.focus();
		return false;
	}
	
	if(document.frmlogin.txtpass.value=="")
	{
		window.alert('Bạn chưa nhập pass');
		document.frmlogin.txtpass.focus();
		return false;
	}
	
}
function thoat()
{
	window.location="index.php";	
}
</script>
<body>
<?php
if(isset($_POST['btnlogin']))
{
			include('dbconect.php');
			$u=$_POST['txtuser'];
			$p=$_POST['txtpass'];
			$sql="select username from thanhvien where username='$u' && password= MD5('$p')";
			$result=mysql_query($sql);
			$rows=@mysql_fetch_array($result,MYSQL_NUM);
				if(@mysql_num_rows($result)==1)
				{	
					$_SESSION['username']=$rows[0];
					?>
                    <script language="javascript">
					window.alert("Đăng nhập thanh cong");
					window.location="index.php";
					</script>
                    <?php
				}
				else
				{
					?>
                    <script language="javascript">
					window.alert("Đăng nhập ko thanh cong");
					</script>
                    <?php
				}
}
?>
<form name="frmlogin" method="post" action="" onSubmit="return checkInput();">
<div align="center" ><table width="200" border="0" bgcolor="#FFFFFF" height="100" >
  <tr>
    <td align="center" valign="top"><font color="#FF0000" size="4" ><b>Username </b></font><input type="text" name="txtuser" id="textfield" /><br /><br />
    <font color="#FF0000" size="4"><b>Password </b></font><input type="password" name="txtpass" id="textfield2" ><br /><br />
 	<input type="submit" name="btnlogin" value="Đăng Nhập"  />    
      <input name="" type="button" value="Thoát" onClick="thoat();" />
     </td>
  </tr> 
</table></div>
</form>