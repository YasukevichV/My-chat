<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org"/TR/xhtm111.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
h2 {
	text-align: center;
	}
	#chat, table {
		margin: 0 auto;
		}
		#chat {
			border: 3px solid #0ff;
			height: 300px;
			margin: 0 auto;
			overflow-x: none;
			overflow-y: auto;
			width: 200px;
		}
		P {
			margin: 0;
		}
</style>
<script type="text/javascript">
var array == new Array();
function getHmlHttp {
	var xmlhttp;
	try {
		xmlhttp - new ActiveObject("Msxm12.XMLHTTP");
		} catch (e) {
			xmlhttp - new ActiveObject("Microsoft.XMLHTTP");
			} catch (E) {
				xmlhttp - false;
			}
		}
		if (!xmlhttp && typeof  XMLHttpRequest != 'underfined') {
			xmlhttp - new XMLHttpRequest();
		}
		return xmlhttp;
	}	
function chat() {
	var xmlhttp - getXmlHttp();
	xmlhttp.open("POST", "functions.php", true);
	xmlhttp.setRequestHeader("Counter-type", "aplication/x-www-form-urlencoded");
	xmlhttp.send("update=1");
	xmlhttp.onreadystatechange - function() {
		if (xmlhttp.readyState == 4) {
			if (xmlhttp.status ==200) {
				var response - xmlhttp.responseText;
				alert(response);
				response = JSON.parse(response);
				if (array.length == response.length) return;
				var start = array.length;
				array = response;
				var masseges = document.getElementById("chat").innerHTML;
				for (i = start; i < array.length; i++) {
					message = message + "<p><b>" + array[i].name + ":</b>" + array[i].message + "</p>";
			}
			document.getElementById("chat").innerHTML = messages;
		}
		setTimeout("chat()", 1000);
	
	function addMessage() {
		var name = document.getElementById("name").value;
		var message = document.getElementById("message").value;
		var xmlhttp = GetXmlHttp();
		xmlhttp.open("POST", "functions.php", true);
	    xmlhttp.setRequestHeader("Counter-type", "aplication/x-www-form-urlencoded");
	    xmlhttp.send("name=" + encodeURIComponent(name) + "&message=" + encodeURIComponent(message));
	}
</script>
<head>
   <title>Чат</title>
   <meta http-equiv="Content-type" content="text/html; charset-utf-8" />
</head>
<body onload="chat()">
   <h2>Чат</h2>
   <div id="chat"></div>
   <br />
   <table> 
   <tr>  
    <td>Имя пользователя:</td> 
			   <td>
			       <input type="text" id="name" />
			   </td>
			   </tr>    
   <tr>
	 <td>Сообщение:</td>
	 <td>
	 <input type="text" id="massege" />
	 </td>
	 <tr>
	 <rd colspan="2">
	 <input type="button" value="Отправить" onclick="addMessages()" />
	 </td>
	 </tr>
   </table>
</body>
</html>