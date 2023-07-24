
<?php
ob_start();
require_once('./TCPDF/tcpdf.php');
require_once("./php/dbConection.php");
date_default_timezone_set('America/Mexico_City');
ob_end_clean();
$recipesPurchased = json_decode($_POST['recipesObjects']);
$currentUser;
$amountOfRecipes;
$totalOfCar;
if (isset($_POST['currentUser'])) {
    $currentUser = $_POST['currentUser'];
    $amountOfRecipes = $_POST['amountOfRecipes'];
    $totalOfCar = $_POST['totalOfCar'];
}
// $query = "INSERT INTO car (id_car,id_user,recipes,total) value ('0','$currentUser','$amountOfRecipes','$totalOfCar')";
// $insert = mysqli_query($conn, $query);
// echo "Registro exitoso";
// header("location: ../pages/products.php");
$username;
$email;
$query = 'SELECT * FROM users where id='.$currentUser;
$userData = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($userData))
{
    $username = $row['nombre'];
    $email = $row['correo'];
}
class MYPDF extends TCPDF {
    // Load table data from file
    public function LoadData() {
        // Read file lines
        $lines = json_decode($_POST['recipesObjects'],true);
        return $lines;
    }

    // Colored table
    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        $w = array(40, 35, 40, 45);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        $recipesNames = array_column($data, 'name');
        $recipesCost = array_column($data, 'cost');
        $recipesQuantity = array_column($data, 'quantity');
        $recipesTotal = array_column($data, 'total');
        $arrayLength = count($recipesCost);

        for($i=0; $i < $arrayLength;$i++) {
            $this->Cell($w[0], 6, substr($recipesNames[$i],0,17), 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, $recipesCost[$i], 'LR', 0, 'C', $fill);
            $this->Cell($w[2], 6, $recipesQuantity[$i], 'LR', 0, 'C', $fill);
            $this->Cell($w[3], 6, $recipesTotal[$i], 'LR', 0, 'C', $fill);
            $this->Ln();
            $fill=!$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Eduardo Robles');
$pdf->SetTitle('Reporte de ventas');
$pdf->SetSubject('Ticket');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'IFoodlex.com', "by me");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
// add a page
$pdf->AddPage();




// column titles
$header = array('Nombre del platillo', 'Costo unitario', 'Cantidad', 'Total');

// data loading
$data = $pdf->LoadData();

$pdf->SetFont('helvetica', 'B', 24);
$pdf->Write(0, 'Factura de Compra', '', 0, 'C', true, 0, false, false, 0);
//Data of user
//name
$pdf->SetFont('helvetica', 'B', 12);
$pdf->setXY(15,45);
$pdf->Write(0, 'Nombre: ');
$pdf->SetFont('helvetica', '', 12);
$pdf->setXY(35,45);
$pdf->Write(0, ''.$username);
//email
$pdf->SetFont('helvetica', 'B', 12);
$pdf->setXY(15,55);
$pdf->Write(0, 'Correo: ');
$pdf->SetFont('helvetica', '', 12);
$pdf->setXY(35,55);
$pdf->Write(0, ''.$email);

//Fecha
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetXY(120, 45);
$pdf->Write(0, 'Fecha: ');
$pdf->SetFont('helvetica', '', 12);
$pdf->SetXY(135, 45);
$pdf->Write(0,''. date('d-m-Y'));

//Hora
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetXY(120, 55);
$pdf->Write(0, 'Hora: ');
$pdf->SetFont('helvetica', '', 12);
$pdf->SetXY(135, 55);
$pdf->Write(0,''. date('h:i A'));

$pdf->Ln(20);
$pdf->SetFont('helvetica', '', 12);

// print colored table
$pdf->ColoredTable($header, $data);
$pdf->Ln(-1);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(40, 6, 'Suma de totales', 1, 0, 'C', 1);
$pdf->SetFont('helvetica', '', 12);
$pdf->SetFillColor(224, 235, 255);
$pdf->SetTextColor(0);
$pdf->Cell(35, 6, $totalOfCar , 1, 0, 'C', 1);
$pdf->Ln(35);
$pdf->SetFont('helvetica', '', 18);
$pdf->Write(0, '¡Gracias por su compra!', '', 0, 'C', true, 0, false, false, 0);//Centra texto

// ---------------------------------------------------------
$pdf_file = 'report_'.date('d-m-y_H:i:s').'_'.$correo.'.pdf';
$pdfContent = $pdf->Output($pdf_file, 'S');

$webdav_url = 'https://10.0.0.5/webdav/'.$pdf_file;
$webdav_user = 'lalo';
$webdav_pass = 'hellofriend';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $webdav_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERPWD, "$webdav_user:$webdav_pass");
curl_setopt($curl, CURLOPT_PUT, true);
curl_setopt($curl, CURLOPT_INFILESIZE, strlen($pdfContent));
curl_setopt($curl, CURLOPT_INFILE, fopen('data://text/plain;base64,'.base64_encode($pdfContent),'r'));

$result = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
if ($httpCode === 201) {
    header("Location: https://192.168.1.71:444/webdav/".$pdf_file);
}else {
    echo $result;
}

mysqli_close($conn);
// ob_end_flush(); 
?>