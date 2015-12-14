<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript">
function showtour(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajaxtimkiem.php?q="+str,true);
xmlhttp.send();
}
</script>
<table width="600" border="0" align="center">
  <tr>
  	<td colspan="2" class="chuto">Tìm kiếm tour du lịch</div></td>
  </tr>
  <tr>
  	<td height="36" colspan="2" valign="top"><img src="anh/chuan.jpg"></div></td>
  </tr>
  <tr>
    <td height="39" align="center" class="chu">Tên tour:</td>
    <td><input name="txtid" type="text" onkeyup="showtour(this.value)"/></td>
  </tr>
  <tr>
  	<td colspan="2"><div id="txtHint"></div></td>
  </tr>
</table>

