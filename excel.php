<?php
$conn=mysqli_connect("localhost","root","");
//include_once('PHPExcel/PHPExcel.php');
require("PHPExcel\Classes\PHPExcel\IOFactory.php");
?>
<table border="1">
<?php
$objPhpExcel=PHPExcel_IOFactory::load("sample.xlsx");
foreach($objPhpExcel->getWorksheetIterator() as $worksheet)
{
	$highestRow=$worksheet->getHighestRow();
	for($row=2;$row<=$highestRow;$row++)
	{
		$name=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(1,$row)->getValue());
		$city=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(2,$row)->getValue());
		echo "<tr><td>$name</td>";
		echo "<td>$city</td></tr>";
		
	}
}

?>
</table>