<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php 
$currentIndex = 1; 
$row1Index = 0; 
$row2Index = 0; 
$row3Index = 0; 
$row_column1 =  array();
$row_column2 =  array();
$row_column3 =  array();

foreach ($rows as $id => $row){
switch($currentIndex){
	case 1:
		$row_column1[$row1Index] = "<div class='node-feature col1 resource$row1Index'> $row </div>";
		$row1Index++;
		$currentIndex++;
		break;
	case 2:
		$row_column2[$row1Index] = "<div class='node-feature col2 resource$row1Index'> $row </div>";
		$row2Index++;
		$currentIndex++;
		break;
	case 3:
		$row_column3[$row1Index] = "<div class='node-feature col3 resource$row1Index'> $row </div>";
		$row3Index++;
		$currentIndex = 1;
		break;				
}

?>
<?php } //end foreach ?>

<?php 
print "<div class='grid-33 alpha'>";
	foreach($row_column1 as $column_r1){
		print $column_r1;
	}
print "</div>";

print "<div class='grid-33 middle'>";
	foreach($row_column2 as $column_r2){
		print $column_r2;
	}
print "</div>";

print "<div class='grid-33 omega'>";
	foreach($row_column3 as $column_r3){
		print $column_r3;
	}
print "</div>";

?>
