<?php

	$array = [
		"<p style='color:#DF1717'>Este parrafo es Rojo</p>",
		"<p style='color:#2817DF'>Este parrafo es Azul</p>",
		"<p style='color:#1EDF17'>Este parrafo es Verde</p>",
		"<p style='color:#DFD117'>Este parrafo es Amarillo</p>",
		"<p style='color:#DF6717'>Este parrafo es Naranja</p>",

		];
	for($i=0;$i<count($array);$i++)
	{
		echo $array[$i];
	}

?>