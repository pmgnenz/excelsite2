<!doctype>
<html>
<head>
</head>
<body>
<?php

require_once "Classes/PHPExcel.php";

		$tmpfname = "SAMPLE DATA DEMO.xlsx";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		echo '<script>alert("Welcome to Geeks for Geeks")</script>';
		echo $lastRow;	
?>

</body>
</html>
