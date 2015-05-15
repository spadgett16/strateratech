<?php
// This file will will delete everything from piecemaker.xml and add 'empty' keyword in the file so that it can be rebuilt by template.php in next execution
function rebuild_piecemaker_xml() {
	$path = $_SERVER['DOCUMENT_ROOT'];

	$path = rtrim($path, "/\\");

	$file = $path . '/corporate_themeforest/sites/all/themes/endless_corporate/sliders/piecemaker/piecemaker.xml';

	print $file;
	// open the file
	$fp = fopen($file, 'w+') or die("Can’t open file $file");

	$text = 'empty';

	$fout = fwrite($fp, $text);

	fclose($fp);
}

rebuild_piecemaker_xml();
?>