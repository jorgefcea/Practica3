<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Práctica 3: Programación basada en lenguaje de marcas con código embebido I</title>
	<style type="text/css">
  		#contenedor { width: 80%; margin: auto; border-radius: 20px;box-shadow: 10px 10px 20px; background-color: rgb(189, 236, 182); padding: 3%; padding-bottom: 1%; padding-top: 0.5%}
  		h2 {margin: auto; text-align: center;}
  		hr {width: calc(100% + 7.6%); height: 2px; color: black; background-color: black; border: none; margin-left: -3.8%;}
	</style>
</head>
<body>
	<div id="contenedor">
		<?php
			echo "<h2>✸ Práctica 3: Programación basada en lenguaje de marcas con código embebido I - Jorge Fernández Cea ✸</h2>";
			echo "<hr>";
			echo "<h3>➤<u> Actividad 1</u> - Realiza un programa en PHP para resolver el siguiente problema a partir de los condicionales IF-ELSE:</h3>";
			echo "<h4>Se quiere crear un formulario para calcular los gastos de envío de una tienda
			online. Para ello, tendremos que realizar una pequeña web muy sencilla que
			nos permita indicar el precio total de la cesta mediante un formulario de
			texto, así como un botón de calcular para que nos devuelva los gastos de
			envío finales.</h4>";
			echo "<h4>Tiene que cumplir lo siguiente:</h4>";
			echo "<h4>• Si la compra es inferior a 50 €, los gastos de envío serán de 3,95 €</h4>";
			echo "<h4>• Si la compra es superior a 50 € pero inferior a 75 €, los gastos de envío
			serán de 2,95 €</h4>";
			echo "<h4>• Si la compra es superior a 75 € pero inferior a 100 €, los gastos de
			envío serán de 1,95 €</h4>";
			echo "<h4>• Si la compra es superior a 100 €, los gastos de envío serán gratuitos.</h4>";
			echo "<h4>El valor de la cesta se determinará en ejecución, obteniendo el valor por
			pantalla mediante un formulario. (pista: El valor por pantalla se obtiene
			mediante el array \$_POST[indice]. Investiga como relacionar un formulario
			en HTML con un código PHP).</h4>";
		?>
		<h3>Calculadora de Gatos de Envío:</h3>
		<form action="Practica3.php" method="post">
			<input type="text" name="precioTotal" placeholder="Indique el precio de su cesta"><br><br>
			<input type="submit" value="Enviar" name="botonEnviar">
		</form>
		<br>
		<?php
			if(isset($_POST["precioTotal"])) {
				$precioTotal = $_POST["precioTotal"];
				if($precioTotal <= 50) {
					echo "Los gastos de envío serán de 3,95 €. <br><br>"; 
					echo "Tu precio final será de: ".$precioTotal + 3.95." €";
				}elseif($precioTotal > 50 && $precioTotal <= 75) {
					echo "Los gastos de envío serán de 2,95 €. <br><br>";
					echo "Tu precio final será de: ".$precioTotal + 2.95." €";
				}elseif($precioTotal > 75 && $precioTotal <= 100) {
					echo "Los gastos de envío serán de 1,95 €. <br><br>";
					echo "Tu precio final será de: ".$precioTotal + 1.95." €";
				}else{
					echo "Los gastos de envío serán gratuitos. <br><br>";
					echo "Tu precio final será de: ".$precioTotal." €";
				}
			}
			echo "<hr>";
			echo "<h3>➤<u> Actividad 2</u> - Realiza un programa en PHP que resuelva el problema anterior con las sentencias condicionales SWITCH-CASE:</h3>";
			?>
			<h3>Calculadora de Gatos de Envío:</h3>
			<form action="Practica3.php" method="post">
				<input type="text" name="precioTotal2" placeholder="Indique el precio de su cesta"><br><br>
				<input type="submit" value="Enviar" name="botonEnviar">
			</form>
			<br>
			<?php
				if(isset($_POST["precioTotal2"])) {
					$precioTotal = $_POST["precioTotal2"];
					switch(true) {
						case $precioTotal <= 50:
							echo "Los gastos de envío serán de 3,95 €. <br><br>"; 
							echo "Tu precio final será de: " . ($precioTotal + 3.95) . " €";
							break;
						case $precioTotal > 50 && $precioTotal <= 75:
							echo "Los gastos de envío serán de 2,95 €. <br><br>";
							echo "Tu precio final será de: " . ($precioTotal + 2.95) . " €";
							break;
						case $precioTotal > 75 && $precioTotal <= 100:
							echo "Los gastos de envío serán de 1,95 €. <br><br>";
							echo "Tu precio final será de: " . ($precioTotal + 1.95) . " €";
							break;
						case $precioTotal > 100:
							echo "Los gastos de envío serán gratuitos. <br><br>";
							echo "Tu precio final será de: " . $precioTotal . " €";
							break;
					}
				}				
				echo "<hr>";
				echo "<h3>➤<u> Actividad 3</u> - Realiza un programa en PHP que calcule el mayor de 5 números mediante bucle FOR. Los 5 números se obtendrán por pantalla mediante un formulario similar al del ejercicio 1:</h3>";
			?>
			<h3>Introduzca los 5 números:</h3>
			<form action="Practica3.php" method="post">
				<input type="text" name="numero1" placeholder="Número 1" style="width : 60px;">
				<input type="text" name="numero2" placeholder="Número 2" style="width : 60px;">
				<input type="text" name="numero3" placeholder="Número 3" style="width : 60px;">
				<input type="text" name="numero4" placeholder="Número 4" style="width : 60px;">
				<input type="text" name="numero5" placeholder="Número 5" style="width : 60px;"><br><br>
				<input type="submit" value="Enviar" name="botonEnviar">
			</form>
			<?php
			if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"]) && isset($_POST["numero4"]) && isset($_POST["numero5"])) {
				$numero1 = $_POST["numero1"];
				$numero2 = $_POST["numero2"];
				$numero3 = $_POST["numero3"];
				$numero4 = $_POST["numero4"];
				$numero5 = $_POST["numero5"];
				$arrayNumeros = array($numero1, $numero2, $numero3, $numero4, $numero5);
				$maximo = $arrayNumeros[0];
				for ($i = 0; $i < count($arrayNumeros); $i++) {
					if ($arrayNumeros[$i] > $maximo) {
						$maximo = $arrayNumeros[$i];  // Actualizamos el valor máximo si encontramos un número mayor
					}
				}
				echo "<br>El número máximo es: " . $maximo;
			}
			echo "<hr>";
			echo "<h3>➤<u> Actividad 4</u> - Realiza un programa en PHP que muestre por pantalla el contenido de la siguiente matriz utilizando el bucle FOREACH:</h3>";
			?>
			<img src="images/matriz1.png" alt="">
			<p><b><u>Resultado:</u></b></p>
			<?php
				$matriz0 = array (
					array(3, 1), 
					array(2, 0)
				);
				foreach ($matriz0 as $fila0) { // Imprimimos la matriz
					foreach ($fila0 as $elemento0) {
						echo " $elemento0 ";
					}
					echo "<br>";
				}
			echo "<hr>";
			echo "<h3>➤<u> Actividad 5</u> - Realiza un programa en PHP que sume las siguientes matrices y muestre por pantalla el resultado:</h3>";
			?>
			<img src="images/matriz2.png" alt="">
			<p><b><u>Resultado:</u></b></p>
			<?php
				$matriz1 = array (
					array(1, 0), 
					array(0, 1)
				);
				$matriz2 = array (
					array(0, 1), 
					array(1, 0)
				);
				$suma = array();

				if(count($matriz1) == count($matriz2)) { // Verificamos que las 2 matrices tengan el mismo tamaño de filas
					for($i=0; $i<count($matriz1); $i++){ // Recorremos cada fila
						$suma[] = array(); // Creamos una entrada por cada fila
						if( count($matriz1[$i])==count($matriz2[$i])){ // Verificamos que las 2 matrices tengan las mismas columnas
							for($j=0; $j<count($matriz1[$i]); $j++){ // Recorremos las columnas
								$suma[$i][] = $matriz1[$i][$j]  + $matriz2[$i][$j]; // Realizamos la suma
							}
						}
					}
					}
					foreach ($suma as $fila) { // Imprimimos el resultado de la suma
						foreach ($fila as $elemento) {
							echo " $elemento ";
						}
						echo "<br>";
					}
			?>
	</div>
</body>
</html>