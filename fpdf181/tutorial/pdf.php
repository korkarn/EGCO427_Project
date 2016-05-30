<?php
$servername = "localhost";
$username = "egco427";
$password = "egco427";
$dbname = "project_deal";
$id = $_GET['id'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {

}
$conn->query("SET NAMES UTF8" );

$sql = "SELECT * FROM deal where id = '".$id."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($temp = mysqli_fetch_assoc($result)) {
        $row = $temp;
        }
    }   
    else {
        echo "0 results";
    }

mysqli_close($conn);

require('../fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('logo-big.png',20,8,30);
        // Arial bold 15
        $this->AddFont('DSNPOP_','','DSNPOP_.php');
        $this->SetFont('DSNPOP_','',30);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->SetTextColor(255,97,56);
        $this->Cell(30,25,'AFFA DEAL :)',0,1,'C');
        // Line break
        $this->Ln(5);

}

    // Page footer
    function Footer()
    {
        $this->SetTextColor(255,97,56);
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->AddFont('DSNPOP_','','DSNPOP_.php');
$pdf->SetFont('DSNPOP_','',18);


$pdf->SetXY(30,50);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'Name:',0,1,'L');
$pdf->SetXY(60,50);
$pdf->SetTextColor(121,189,143);
$pdf->Cell(50,10,iconv('UTF-8', 'cp874', $row["name"]),0,1,'L');
$pdf->SetXY(30,60);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'Promotion:',0,1,'L');
$pdf->SetXY(60,60);
$pdf->SetTextColor(121,189,143);
$pdf->MultiCell(120,10,iconv('UTF-8', 'cp874', $row["promotion"]));
$pdf->SetX(30);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'Description:');
$pdf->SetX(60);
$pdf->SetTextColor(121,189,143);
$pdf->MultiCell(120,10,iconv('UTF-8', 'cp874', $row["description"]));
$pdf->SetX(30);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'Old Price:');
$pdf->SetX(60);
$pdf->SetTextColor(121,189,143);
$pdf->Cell(50,10,$row["price_old"]);
$pdf->SetX(75);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'Baht',0,1,'L');
$pdf->SetX(30);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'New Price:');
$pdf->SetX(60);
$pdf->SetTextColor(121,189,143);
$pdf->Cell(50,10,$row["price_new"]);
$pdf->SetX(75);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'Baht',0,1,'L');
$pdf->SetX(30);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'Location:');
$pdf->SetX(60);
$pdf->SetTextColor(121,189,143);
$pdf->MultiCell(120,10,iconv('UTF-8', 'cp874', $row["address"]));
$pdf->SetX(30);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'Tel:');
$pdf->SetX(60);
$pdf->SetTextColor(121,189,143);
$pdf->Cell(50,10,$row["tel"],0,1,'L');
$pdf->SetX(30);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(25,10,'Website:');
$pdf->SetX(60);
$pdf->SetTextColor(121,189,143);
$pdf->MultiCell(120,10,iconv('UTF-8', 'cp874', $row["website"]));
$pdf->SetX(30);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(25,10,'Date:');
$pdf->SetX(60);
$pdf->SetTextColor(121,189,143);
$pdf->Cell(50,10,$row["date_start"]);
$pdf->SetX(85);
$pdf->SetTextColor(0,163,136);
$pdf->Cell(50,10,'to');
$pdf->SetX(90);
$pdf->SetTextColor(121,189,143);
$pdf->Cell(50,10,$row["date_end"],0,1,'L');

$pdf->Output();
?>
