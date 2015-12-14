<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript">
function checkInput()
{
		if(document.frmregister.txtname.value=="")
		{
			window.alert('Bạn chưa nhật tên hoạt động');
			document.frmregister.txtname.focus();
			return false;
		}
		if(document.frmregister.txtma.value=="")
		{
			window.alert('Bạn chưa nhập mã hoạt động');
			document.frmregister.txtma.focus();
			return false;
		}
}
function thoat()
{
	window.location="index.php";	
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
<?php
if(isset($_POST['Smcnhd']))
{		$n=$_POST['txtname'];
		$m=$_POST['txtma'];
		include('dbconect.php');
		$sql="INSERT INTO hoatdong(tenhd,mahd) 
		values('$n','$m')";
			$result=mysql_query($sql);
			if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php";
                </script>
                <?php
			}
		else
			echo' Bạn ko cập nhật đc vì lỗi hệ thống'.mysql_error();
}
?>
<form name="frmregister" method="post" action="" onSubmit="return checkInput();">
<div align="center">
<table width="600" border="0">
	<tr>
    	<td colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>CẬP NHẬT THÔNG TIN HOẠT ĐỘNG</b></p></td>
    </tr>
    <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
    </tr>
     <tr>
         <td colspan="2"><b><font color="#0099FF">Thông tin hoạt động</font></b></td>
    </tr>
    <tr>
         <td width="207" class="chu">Tên hoạt động<font color="#FF0000">*</font></td>
         <td width="377"><label>
         <input name="txtname" type="text" size="30" maxlength="50" />
         </label></td>
    </tr>
     <tr>
         <td class="chu">Mã hoạt động<font color="#FF0000">*</font> </td>
          <td width="377"><label>
         <input name="txtma" type="text" size="30" maxlength="50" />
         </label></td>
     </tr>
     <tr>
         <td colspan="2"><label>
           <div align="center">
             <input name="Smcnhd" type="submit"  value="" class="btncapnhat">
             <input type="button" name="btnthoat" class="btnexit" onClick="thoat();" />
           </div>
         </label></td>
         </tr>
</table>
</div>
