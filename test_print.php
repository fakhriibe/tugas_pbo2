<?php
// include autoloader
require_once 'dompdf/autoload.inc.php';
require_once 'dompdf/style.php';

use Dompdf\Dompdf;

$style=f_bootsrap();
$judul=$_SESSION['judul'];
$periode=$_SESSION['laporan']['periode'];

$header='<h1 align="center"> $judul </h1>';
$tanggal='<p align="center"> Periode : $tanggal';
$isi='<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th align="left">Name</th>
            <th >Points</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Melissa</td>
            <td>5150</td>
        </tr>
         <tr>
            <td>Melissa</td>
            <td>5150</td>
        </tr>
         <tr>
            <td>Melissa</td>
            <td>5150</td>
        </tr>
         <tr>
            <td>Melissa</td>
            <td>5150</td>
        </tr>
    </tbody>
</table>';


echo $style.$header.$tanggal.$isi;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($style.$header.$tanggal.$isi);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();

?>


</tr>