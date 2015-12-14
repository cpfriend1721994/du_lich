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
			window.alert('Bạn chưa nhập tên tài nguyên');
			document.frmregister.txtname.focus();
			return false;
		}
		if(document.frmregister.txtchitiet.value=="")
		{
			window.alert('Bạn chưa nhập chi tiết');
			document.frmregister.txtchitiet.focus();
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
<?php
	if($_GET['suatainguyen'])
	{
		include('dbconect.php');
		$matn=$_GET['suatainguyen'];
		$sql="select * from  tainguyendulich where matn='$matn'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
	}
?>
<form name="frmregister" method="post" action="thucthisuatainguyen.php" enctype="multipart/form-data" onSubmit="return checkInput();">
<div align="center">
<table width="600" border="0">
	<tr>
    	<input name="txtmatn" type="hidden" value="<?php echo $rows['matn']; ?>" />
    	<td colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN TÀI NGUYÊN</b></p></td>
    </tr>
    <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
    </tr>
     <tr>
         <td colspan="2"><b><font color="#0099FF">Thông tin tài nguyên</font></b></td>
    </tr>
    <tr>
         <td width="207" class="chu">Tên tài nguyên<font color="#FF0000">*</font></td>
         <td width="377"><label>
         <input name="txtname" type="text" size="30" maxlength="50" value="<?php echo $rows['tentn'];?>"/>
         </label></td>
    </tr>
     <tr>
     	<td class="chu">Mã loại hình </td>
        <td><select name="cbbmalh">
        <?php
		require_once('dbconect.php');
		$sql2="select * from loaihinhdulich";
		$result2=mysql_query($sql2);
		while($row=@mysql_fetch_array($result2))
		{
		?>
          <option value="<?php echo $row['malh']; ?>"><?php echo $row['tenlh']; ?></option>
          <?php
		}
		?>
            </select>
       </td>
     </tr>
     <tr>
	  	<td height="36" class="chu">Hình ảnh</td>
		<input name="MAX_FILE_SIZE" type="hidden" value="524288" />
    	<td><input name="upload" type="file" /></td>
 	 </tr>
     <tr>
        <td class="chu">Chi tiết<font color="#FF0000">*</font> </td>
         <td><label>
         <textarea name="txtchitiet" cols="60" rows="10"><?php echo $rows['chitiet'];?></textarea>
         </label></td> 
      </tr>
      <tr>
         <td colspan="2"><label>
           <div align="center">
             <input name="Smcntn" type="submit"  value="" class="btncapnhat">
             <input type="button" name="btnthoat" class="btnexit" value="" onClick="thoat();" />
           </div>
        </label></td>
         </tr>
</table>
</div>
</form>
</body>