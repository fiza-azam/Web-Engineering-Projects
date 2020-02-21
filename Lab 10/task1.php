<!DOCTYPE html>
<html>
<head>
	<title>PHP tasks</title>
</head>
<body>

	<?php

		//Factorial calculation
		$fact = 1;
		function factorial($inputNumber){
			global $fact;

			if($inputNumber==0 or $inputNumber==1){
				$fact = 1;
				return $fact;
			}
			else{
				for($i = $inputNumber; $i > 0; $i--){
					$fact = $fact * $i;
				}
				return $fact;
			}
		}

		echo "Fcatorial of 5 is: ".factorial(5). "<br><br><br>";

class methodOverloading{
		//Arithmetic calculations
		function __call($nameOfFunction, $arg){
			if($nameOfFunction == 'ArithmeticCal'){
				if(count($arg) == 2){
					echo "Method Overloading with 2 parameters <br>";
					$sum = $arg[0] + $arg[1];
					echo $arg[0]."+".$arg[1]."= $sum <br>";

					$diff = $arg[0] - $arg[1];
					echo $arg[0]."-".$arg[1]."= $diff <br>";

					$mul = $arg[0] * $arg[1];
					echo $arg[0]."*".$arg[1]."= $mul <br>";

					$div = $arg[0] / $arg[1];
					echo $arg[0]."/".$arg[1]."= $div <br><br><br>";
				}

				else if(count($arg) == 3){
					echo "Method Overloading with 3 parameters <br>";
					$sum = $arg[0] + $arg[1] + $arg[2];
					echo $arg[0]."+".$arg[1]."+".$arg[2]."= $sum <br>";

					$diff = $arg[0] - $arg[1] - $arg[2];
					echo $arg[0]."-".$arg[1]."-".$arg[2]."= $diff <br>";

					$mul = $arg[0] * $arg[1] * $arg[2];
					echo $arg[0]."*".$arg[1]."*".$arg[2]."= $mul <br>";

					$div = ($arg[0] / $arg[1]) / $arg[2];
					echo "(".$arg[0]."/".$arg[1].")/".$arg[2]."= $div <br><br><br>";
				}
			}
		}
	}

		$obj = new methodOverloading;
		$obj->ArithmeticCal(2,5);
		$obj->ArithmeticCal(2,5,10);
	?>

</body>
</html>