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
			window.alert('Bạn chưa nhật tên tài nguyên');
			document.frmregister.txtname.focus();
			return false;
		}
		if(document.frmregister.txtchitiet.value=="")
		{
			window.alert('Bạn chưa nhập chi tiết tài nguyên');
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
if(isset($_POST['Smcntn']))
{		$n=$_POST['txtname'];
		$mlh=$_POST['cbbmalh'];
		$ct=$_POST['txtchitiet'];
		include('dbconect.php');
		$sql="INSERT INTO tainguyendulich(tentn,chitiet,anh,malh) 
		values('$n','$ct','{$_FILES['upload']['name']}','$mlh')";
			$result=mysql_query($sql);
			if($result)
			{
				$filename=$_FILES['upload']['name'];
				if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhtainguyen/$filename"))
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=34";
                </script>
                <?php
				}
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=34";
                </script>
                <?php
			}
		else
			echo' Bạn ko cập nhật đc vì lỗi hệ thống'.mysql_error();
}
?>
<form name="frmregister" method="post" action="" enctype="multipart/form-data" onSubmit="return checkInput();">
<div align="center">
<table width="600" border="0">
	<tr>
    	<td colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>CẬP NHẬT THÔNG TIN TÀI NGUYÊN</b></p></td>
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
         <input name="txtname" type="text" size="30" maxlength="50" />
         </label></td>
    </tr>
     <tr>
     	<td class="chu">Mã loại hình </td>
        <td><select name="cbbmalh">
        <?php
		require_once('dbconect.php');
		$sql3="select * from loaihinhdulich";
		$result3=mysql_query($sql3);
		while($rows=@mysql_fetch_array($result3))
		{
		?>
          <option value="<?php echo $rows['malh']; ?>"><?php echo $rows['tenlh']; ?></option>
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
         <textarea name="txtchitiet" cols="60" rows="10"></textarea>
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

