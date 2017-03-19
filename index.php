<?php error_reporting( E_ERROR ); 			
function show($a) 
{ 
	if (isset($a)) {
		if (is_numeric($a)) echo "<br>Введенное значение переменной: {$a}<br>" . "'{$a}' - число";
			else if (is_string($a)) {
				$mas = array();
				echo "<br>Введенное значение переменной: '$a'";
				for ($i=0; $i<strlen($a); $i++) {
					if (is_numeric($a[$i])) {
						$x = $x."{$a[$i]}";
					}
				if (($i==strlen($a)) && ($x == NULL)) {return false; } 
				}
				echo "<br>Числa, присутствующее в строке: ", $x; 
			} else if (is_array($a)) {
				echo "<br>Значения массива: <br>";
				foreach ($a as $value) {
					echo $value." ";
    				if (is_numeric($value))	$y.=$value." "; 
				}
				echo "<br>числа в массиве: ", $y;
				}
				echo "<br>";
		}
}

$var = 	array ('w123', 1, 2, 3);
show($var);
$var2 = 23;
show($var2);	
$var3 = 'we12334';
show($var3);	
$var4 = 'hello word';
show($var4);
/*
Напишите функцию, которая проверяет, содержит ли переменная числовое значение,
 даже если она имеет строковый тип и если оно есть то возвращает его в соответствующем типе, иначе возвращает false.*/
?>
