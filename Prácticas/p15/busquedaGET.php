<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Curso de Laravel 5</title>
	</head>
	<style>
		.1#td { width:125.9pt;border:none;background:#000000;
		  mso-background-themecolor:accent5;mso-background-themetint:63;padding:0cm 5.4pt 0cm 5.4pt}

		body {
		    background-color: #EAEAEA;
		}

		* {
		 padding: 0cm 6pt;
		 font-family: "Century Gothic","sans-serif";
		 font-size: 13.0pt;
		 color: #000000;
		 font-weight: bold;
		}

		select, input {
		 padding: 0px;
		 width: 300px;
		}

		tr.even td {
		 background: #EAEAEA;
		}

		tr.last td {
		 border-bottom: solid #4BACC6 1.0pt;
		}

		tr.first td {
		 border-top: solid #4BACC6 1.0pt;
		 border-bottom: solid #4BACC6 1.0pt;
		}

		input[type=submit] {
			background: url('button_search.png') no-repeat;
			width: 176px;
			height: 40px;
			padding-top: 2px;
			border: none;
		}

		textarea {
		 font-family: "Arial","sans-serif";
		 font-size: 7.0pt;
		 color: #FFFFFF;
		 background: #000000;
		 font-weight: normal;
		}

	</style>
	<script type="text/javascript">
		function loadDoc() 
		{
			var xhttp = getXMLHttpRequest();

			xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200)
				{
					var query = eval('('+this.responseText+')');
					document.getElementById("dato0").innerHTML = query.id_cliente;
					document.getElementById("dato1").innerHTML = query.nombre;
					document.getElementById("dato2").innerHTML = query.apellidos;
					document.getElementById("dato3").innerHTML = query.direccion;
					document.getElementById("dato4").innerHTML = query.ciudad;
					document.getElementById("dato5").innerHTML = query.codigo_postal;
				}
			};

			xhttp.open("GET", "consultarBD.php?nombre="+document.forms[0]["nombre"].value, true);
			// Dado que consultarBD.php puede estar en un servidor puedes usar:
			// xhttp.open("GET", "http://localhost/consultarBD.php?nombre="+document.forms[0]["nombre"].value, true);
			xhttp.send();
		}

		function getXMLHttpRequest()
		{
			var objetoAjax;

			try{
				objetoAjax = new XMLHttpRequest();
			}catch(err1){
				try{
					// 
					objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
				}catch(err2){
					try{
						// IE5 y IE6
						objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
					}catch(err3){
						objetoAjax = false;
					}
				}
			}
			return objetoAjax;
		}
	</script>
	<body>
		<h3 align="center">CODIGO DE PRUEBA - Datos Clientes</h3>

		<br/>

		<form>
			<label>Nombre:</label><input type="text" name="nombre">
		</form>

		<button type="submit" onclick="loadDoc()">B U S C A R</button>

		<br/>

		<table cellpadding=0 cellspacing=0 width="1200">
			<tr class="even">
                <td>ID:</td>
                <td id="dato0"></td> 
	        </tr>
			<tr class="even">
                <td>Nombre:</td>
                <td id="dato1"></td> 
	        </tr>
			<tr class="even">
                <td>Apellidos:</td>
                <td id="dato2"></td> 
	        </tr>
			<tr class="even">
                <td>Dirección:</td>
                <td id="dato3"></td> 
	        </tr>
			<tr class="even">
				<td>Ciudad:</td>
				<td id="dato4"></td>
			</tr>
			<tr class="even">
                <td>Código Postal:</td>
                <td id="dato5"></td> 
	        </tr>
		</table>
	</body>
</html>