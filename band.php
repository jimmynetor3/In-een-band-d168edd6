<?php 
$i = 1;
$numCount = 0;
$numSum = 0;
$albumoverzicht = array('citizen of glass' => 4.50,
						'night' => 9,
						'new eyes' => 5,
						'strange trails' => 20);

foreach ($albumoverzicht as $album => $prijs) {
	echo $album . ' kost ' . $prijs;
	echo PHP_EOL;																																																																							
};

$numTotal = array_sum($albumoverzicht) / count($albumoverzicht);

echo "je totale prijs is ". array_sum($albumoverzicht) . PHP_EOL;
echo "je gemildelde prijs is " . $numTotal; 
