<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";

	for ($col=0; $col <=100; $col++) {
		if($col==0)
		{
			echo "<td></td>";
		}
		else
		{ 		  
		  echo "<td>$col</td>";
		}
	}
		
$col=1;

	for ($row=1; $row <= 100; $row++) { 
	echo "<tr>";
    if($col==1)
    {
      echo "<td>$row</td>";
    }
		for ($col=1; $col <= 100; $col++) {
		   $p = $col * $row;
		   echo "<td>$p</td>";
		   	}
	 echo "</tr>";
   $col=1;
		}
echo "</table>";
?>

