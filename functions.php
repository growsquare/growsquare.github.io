<?php
function technologies($fieldNumber)
{
 $row = 1;
 if (($handle = fopen("csv.csv", "r")) !== FALSE) {
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { 
   if($row != 1){
		if(empty($data[$fieldNumber])){
		
		}
		else{
		echo '<a class="btn btn-primary-outline btn-sm">'.$data[$fieldNumber].'</a> ';
		}
   }
	else{
		echo '<p><a class="btn btn-primary">'.$data[$fieldNumber].'</a> </p><p>';
	}
	$row++;
   }    
    fclose($handle);
	echo '</p>';
 }
 }
 ?>