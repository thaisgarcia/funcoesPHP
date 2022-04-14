<!DOCTYPE html>
<html>
	<head> 
		<title>Função 3</title> 
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width-device-width">
	</head>
	
	<body>
		<form method="post">
			<label>Digite seu CEP: <input type="text" name="txtCEP"/> </label>
			<br></br>
			<input type="submit" value="Enviar">
		</form>
		<br></br>

        <?php
            $cep = $_POST["txtCEP"] = (isset($_POST['txtCEP']) ) ? $_POST['txtCEP'] : null;
            $cep = substr($cep, -3);
            echo $cep; 
        ?>  
    </body>
</html>