<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Bar Codes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    </style>
</head>
<body class="bg">
    <div class="container" id="panel">
        <br><br><br>
        <div class="row">
            <div class="card col-md-6 offset-md-3" style="background: white; padding: 20px; box-shadow: 10px 10px 5px #888888;">
                <div class="panel-heading">
                    <h1>Generar Código de Barras</h1>
                </div>
                <hr>
                <form action="generate.php" method="get">
                    <TR>
                        <TD><B>Select Encoding</B></TD>
                        	<TD>:</TD>
                            <TD>
                                <SELECT NAME="barcode_type">
                                    <OPTION value='C128'>CODE128</OPTION>
                                    <OPTION value='C39'>CODE39</OPTION>
		                            <OPTION value='C93'>CODE93</OPTION>		
                                    <OPTION value='EAN2'>EAN-2</OPTION>
                                    <OPTION value='EAN5'>EAN-5</OPTION>
		                            <OPTION value='EAN13'>EAN-13</OPTION>
		                            <OPTION value='EAN8'>EAN-8</OPTION>
                                    <OPTION value='UPCA'>UPC-A</OPTION>
		                            <OPTION value='UPCE'>UPC-E</OPTION>
		                            <OPTION value='S25'>STANDARD 2 OF 5</OPTION>
		                            <OPTION value='I25'>INTERLEAVED</OPTION>
		                            <OPTION value='POSTNET'>POSTNET</OPTION>
		                            <OPTION value='CODABAR'>CODABAR</OPTION>
                                </SELECT>
                            </TD>
                    </TR>
                    <tr><td></br></br></td></tr>
                    <tr><td><input type="text" style="border-radius: 0px;" name="barcodeid" class="form-control" autocomplete="off" placeholder="Text..." value=""></td></tr>
                    </br>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary" role="button" aria-disabled="true">Generar Código</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>