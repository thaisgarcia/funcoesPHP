<!DOCTYPE html>
<html>
	<head> 
		<title>Função 4</title> 
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width-device-width">
	</head>
	
	<body>
		<form method="post">
			<label>Digite uma data: <input type="date" name="date"/> </label>
			<br></br>
			<input type="submit" value="Enviar">
		</form>
		<br></br>

        <?php
            $data = $_POST["date"] = (isset($_POST['date']) ) ? $_POST['date'] : null;
			$arr_msg = explode("-", $data);
			$ano = $arr_msg[0];
			$mes = $arr_msg[1];
			$dia = $arr_msg[2];
			echo "Dia: $dia <br>";
			echo "Mês: $mes <br>";
			echo "Ano: $ano";
        ?>  
    
    </body>
</html>