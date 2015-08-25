<?php
echo date("l jS \of F Y");
echo "<br>";
echo date("d \/ m \/ y");
echo "<br>";
echo date("d \/ m \/ Y");
echo "<br>";
echo date("F j \, Y ");
echo "<br>";
echo date(DATE_RFC2822);
echo "<br>";
echo date("l d \of F Y", mktime(0, 0, 0, 8, 11, 2015));
?>