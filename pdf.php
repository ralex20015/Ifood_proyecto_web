
<?php
ob_start();
require_once('./TCPDF/tcpdf.php');
require_once("./php/dbConection.php");
date_default_timezone_set('America/Mexico_City');
$currentUser = $_POST['currentUser'];
$totalOfCar = $_POST['totalOfCar'];
$amountOfRecipes = $_POST['amountOfRecipes'];

// $query = "INSERT INTO car (id_car,id_user,recipes,total) value ('0','$currentUser','$amountOfRecipes','$totalOfCar')";
// $insert = mysqli_query($conn, $query);
// echo "Registro exitoso";
// header("location: ../pages/products.php");
$query = 'SELECT nombre FROM users where id='.$currentUser;
$username = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($username))
{
    echo $row['nombre'];
}
// header("location: ./pdf.php");


$pdf = new TCPDF('P','mm','A4');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();
$pdf->SetCreator($row);
// $pdf->Output('asdasdas.pdf','I');
mysqli_close($conn);
ob_end_flush(); 
// $archivo_pdf = 'report_' . date('d-m-y_H:i:s') . '.pdf';
// $webdav_url = 'http://webdav.ifoodlex.com/webdav/' . $archivo_pdf;
// $webdav_usuario = 'lalo';
// $webdav_clave = 'hellofriend';

// $curl = curl_init($webdav_url);

// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
// curl_setopt($curl, CURLOPT_USERPWD, "$webdav_usuario:$webdav_clave");
// curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/pdf'));
// curl_setopt($curl, CURLOPT_POSTFIELDS, $pdf->Output($archivo_pdf, 'S'));

// // Ejecutar la solicitud
// $resultado = curl_exec($curl);

// if ($resultado === false) {
//     echo 'Hubo un error al enviar el archivo PDF por WebDAV: ' . curl_error($curl);
// } else {
//     echo 'El archivo PDF se ha enviado correctamente por WebDAV.';
//     header('Location: '.$webdav_url);
// }



?>