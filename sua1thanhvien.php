<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript">
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.txtname.value=="")
		{
			window.alert('Bạn chưa nhập tên thành viên');
			document.frmregister.txtname.focus();
			return false;
		}
		if(document.frmregister.txtdc.value=="")
		{
			window.alert('Bạn chưa nhập địa chỉ');
			document.frmregister.txtdc.focus();
			return false;
		}
		if(document.frmregister.txtdt.value=="")
		{
			window.alert('Bạn chưa nhập số điện thoại');
			document.frmregister.txtdt.focus();
			return false;
		}
}
function MM_jumpMenu(targ,selObj,restore)
{ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<body>
<p>
  <?php
	if($_GET['suathanhvien'])
	{
		include('dbconect.php');
		$u=$_GET['suathanhvien'];
		$sql="select * from  thanhvien where username='$u'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
	}
?>
<form name="frmregister" method="post" action="thucthisuathanhvien.php" onSubmit="return checkInput();">
  <table width="600" border="1" class="tanle">
  <tr>
    <td rowspan="8" width="300"><img src="anhtv/<?php echo $rows['anh'];?>" width="300" height="300"></td>
    <td height="22" align="center" class="chu"><b>Tên thành viên</b></td>
    </tr>
  <tr>
    <td align="center"><label>
      <input type="text" name="txtname" id="textfield" value="<?php echo $rows['tentv'];?>"/>
    </label></td>
  </tr>
  <tr>
    <td align="center" class="chu"><b>Ngày sinh</b></td>
  </tr>
  <tr>
    <td align="center"><label>
      <input type="text" name="txtns" id="textfield" value="<?php echo $rows['ngaysinh'];?>"/>
    </label></td>
  </tr>
  <tr>
    <td align="center" class="chu"><b>Địa Chỉ</b></td>
  </tr>
  <tr>
    <td align="center"><label>
      <input type="text" name="txtdc" id="textfield" value="<?php echo $rows['diachi'];?>"/>
    </label></td>
  </tr>
  <tr>
    <td align="center" class="chu"><b>Số điện thoại</b></td>
  </tr>
  <tr>
    <td align="center"><label>
      <input type="text" name="txtdt" id="textfield" value="<?php echo $rows['sodt'];?>"/>
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input name="Smcntn" type="submit"  value="" class="btncapnhat">
      <input type="button" name="btnthoat" class="btnexit" value="" onClick="thoat();" />
    </div></td>
    </tr>
  </table>

</form>