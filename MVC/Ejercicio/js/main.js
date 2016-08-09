function getData()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		document.getElementById("tableData").innerHTML = "";
	       document.getElementById("tableData").innerHTML=xmlhttp.responseText;
	    }
	  }
	 e = document.getElementById("nombre");
	 nombre = e.options[e.selectedIndex].value;
	xmlhttp.open("GET","getdata.php?nombre=" + nombre,true);
	xmlhttp.send();
}
