<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('<h1>Taparona</h1>');

// Output a PDF file directly to the browser
$mpdf->Output();
?>