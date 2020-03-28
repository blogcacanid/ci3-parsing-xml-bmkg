<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>Parsing Data JSON Info Corona CodeIgniter 3</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Data Corona Terakhir COVID-19</h2>
        </div>
        <div class="row">
            Last Update : <?php echo $datalist['date_string'];?><hr>
        </div>
        <div class="row">
            <table class="table table-striped">
                <tbody>
                    <?php //foreach($datalist as $row):?>
                        <tr>
                            <td>Total</td>
                            <td><?php echo number_format($datalist['total']);?></td>
                        </tr>
                        <tr>
                            <td>Aktif</td>
                            <td><?php echo number_format($datalist['active']);?></td>
                        </tr>
                        <tr>
                            <td>Sembuh</td>
                            <td><?php echo number_format($datalist['sembuh']);?></td>
                        </tr>
                        <tr>
                            <td>Meninggal</td>
                            <td><?php echo number_format($datalist['meninggal']);?></td>
                        </tr>
                    <?php //endforeach;?>
                </tbody>
            </table>
            Tampilkan Data&nbsp;<a href="<?php echo base_url().'corona/details'?>">Details</a>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>  
