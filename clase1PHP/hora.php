<?php
	$hora = substr(date("His"),2,2);
	if($hora >= 6 && $hora < 12)
	{
		echo "Es de Mañana";
	}
	else if($hora >= 12 && $hora < 20)
	{
		echo "Es de Tarde";
	}
	else
	{
		echo "Es de Noche";
	}
?>