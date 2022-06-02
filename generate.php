<?php
require 'vendor/autoload.php';

use Picqer\Barcode\BarcodeGenerator;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorSVG;

if (!$_GET['barcodeid']) {
    header("location: index.php");
    die();
}

/* 
if(isset($_GET['barcode_type'])){
     $barcode_type = $_GET['barcode_type'];
     $generatorSVG = new Picqer\Barcode\BarcodeGeneratorSVG();
     $generated = $generatorSVG->getBarcode('1234567890', $barcode_type);
}
*/

// Esto mostrará la salida del codigo de barras como HTML/PNG para mostrase en el navegador
// $generatorPNG = new Picqer\Barcode\BarcodeGeneratorHTML();
// $BarCodePNG = $generatorPNG->getBarcode($_GET['barcode'], $Bar::TYPE_CODE_128);
// barcodeid is the text sent by the form to be encoded as barcode
// $textCode shows the code as text

// $redColor = [255, 0, 0];
// file_put_contents('barcode.png', $generatorPNG->getBarcode($_GET['barcodeid'], $typeCode, 3, 50, $redColor));
if(isset($_GET['barcode_type'])){
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
    $ID_CODE = $_GET['barcode_type'];
// $typeCode = $generatorPNG::TYPE_EAN_13;
    $BarCodePNG = '<img src="data:image/png;base64,' . base64_encode($generatorPNG->getBarcode($_GET['barcodeid'], 'UPCA', 2, 60)) . '">';
    $textCode = $_GET['barcodeid'];

// Para grabar una imagen png en disco, active la siguiente linea
// file_put_contents($_GET['barcodeid'] .'.png', $generatorPNG->getBarcode($_GET['barcodeid'], $_GET['barcode_type'], 2, 60,));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Bar Codes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style type="text/css" media="print">
        @page
        {
            size: auto;   /* auto is the initial value */
            margin: 0mm;  /* this affects the margin in the printer settings */
        }
    </style>
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #qrbox>div {
            margin: auto;
        }
        #qrbox>div>img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body class="bg">
    <div class="container" id="panel">
        <br><br><br>
        <div class="row">
            <div class="card col-md-6 offset-md-3" style="background: white; padding: 20px; box-shadow: 10px 10px 5px #888888;">
                <div class="panel-heading text-center">
                    <h2>Barra Codigo Generada ID: <?php echo $_GET['barcodeid']?></h2>
                </div>
                <hr>
                <div id="qrbox" class="text-center">
                    <?php echo $BarCodePNG ?>
                </br>
                    <?php echo $textCode ?>
                </div>
                <hr>
                <div class="text-center">
                    <a class="btn btn-primary" role="button" aria-disabled="true" href="index.php">Generar otro</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>