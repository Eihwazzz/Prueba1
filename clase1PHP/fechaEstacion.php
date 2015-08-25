<?php
$fecha=substr(date("dmY"),2,2);


switch($fecha)
{

	case 1:
	case 2:
	case 3:
		if((date("d") < 21 && $fecha <= 3) || (date("d") >= 21 && $fecha < 3))
		{
			echo "Es Verano";
			break;
		}
	case 4:
	case 5:
	case 6:
		if((date("d") < 21 && $fecha <= 6) || (date("d") >= 21 && $fecha < 6))
		{
			echo "Es Otoño";
			break;
		}
	case 7:
	case 8:
	case 9:
		if((date("d") < 21 && $fecha <= 9) || (date("d") >= 21 && $fecha < 9))
		{
			echo "Es Invierno";
			break;
		}
	case 10:
	case 11:
	case 12:
		if((date("d") < 21 && $fecha <= 12) || (date("d") >= 21 && $fecha < 12))
			{
				echo "Es Primavera";
				break;
			}
			else{
				echo "Es Verano";
			}
			break;
		}
?>