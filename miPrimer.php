<html>
		<head>
				<title>Sumando</title>
		</head>
		
		<body>
				<center>
				<?php
						define(TAM,10);
						function potencia ($v1,$v2){
							$potencia = pow($v1,$v2);
							return $potencia;
						}
						echo "<table border = 1>";
						for ($n1=1;$n1<=TAM;$n1++){
							if($n1%2 ==0)
								echo"<tr bgcolor=#00FA9A>";
							else
								echo "<tr>";
							for($n2=1;$n2<=TAM;$n2++){
								echo "<td>".potencia($n1,$n2)."</td>";
								$n=$n+1;
						    }
						    echo "</tr>";
					    }
						echo "</table>";
				?>
				</center>
		</body>
</html>
