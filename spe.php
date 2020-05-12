<?php
	include "phpqrcode/qrlib.php"; 

	$codeContents = '202005121034051681'; 
	QRcode::png($codeContents); 
	
?>