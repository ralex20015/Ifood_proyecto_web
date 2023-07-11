
<?php
ob_start();
require_once('./TCPDF/tcpdf.php');

$pdf = new TCPDF('P','mm','A4');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();
// $pdf->Output('asdasdas.pdf','I');
$archivo_pdf = 'report_' . date('d-m-y_H:i:s') . '.pdf';
$webdav_url = 'http://10.0.0.5/webdav/' . $archivo_pdf;
$webdav_usuario = 'lalo';
$webdav_clave = 'hellofriend';

$curl = curl_init($webdav_url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($curl, CURLOPT_USERPWD, "$webdav_usuario:$webdav_clave");
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/pdf'));
curl_setopt($curl, CURLOPT_POSTFIELDS, $pdf->Output($archivo_pdf, 'S'));

// Ejecutar la solicitud
$resultado = curl_exec($curl);
ob_end_flush(); 
?>