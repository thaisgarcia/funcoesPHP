<!DOCTYPE html>
<html>
	<head> 
		<title>Função 2</title> 
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width-device-width">
	</head>
	
	<body>
		<form method="post">
			<label>Escreva uma palavra: <input type="text" name="txtPalavra"/> </label>
			<br></br>
			<input type="submit" value="Enviar">
		</form>
		<br></br>

        <?php
            $palavra = $_POST["txtPalavra"] = (isset($_POST['txtPalavra']) ) ? $_POST['txtPalavra'] : null;
            $palavra = str_replace("a", ".", $palavra);
			$palavra = str_replace("e", ".", $palavra);
			$palavra = str_replace("i", ".", $palavra);
			$palavra = str_replace("o", ".", $palavra);
			$palavra = str_replace("u", ".", $palavra);
            echo $palavra; 
        ?>  
    
    </body>
</html>