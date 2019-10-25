<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>Parsing Data XML Info Gempa BMKG CodeIgniter 3</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Data Gempa Terakhir BMKG</h2><hr>
            <table class="table table-striped">
                <tbody>
                    <?php foreach($datalist as $row):?>
                        <tr>
                            <td>Tanggal/ Jam</td>
                            <td><?php echo $row->Tanggal.'/ '.$row->Jam;?></td>
                        </tr>
                        <tr>
                            <td>Koordinat</td>
                            <td><?php echo $row->point->coordinates;?></td>
                        </tr>
                        <tr>
                            <td>Lintang</td>
                            <td><?php echo $row->Lintang;?></td>
                        </tr>
                        <tr>
                            <td>Bujur</td>
                            <td><?php echo $row->Bujur;?></td>
                        </tr>
                        <tr>
                            <td>Magnitude</td>
                            <td><?php echo $row->Magnitude;?></td>
                        </tr>
                        <tr>
                            <td>Wilayah</td>
                            <td>
                                <ul>
                                    <?php echo '<li>'.$row->Wilayah1.'</li>';?>
                                    <?php echo '<li>'.$row->Wilayah2.'</li>';?>
                                    <?php echo '<li>'.$row->Wilayah3.'</li>';?>
                                    <?php echo '<li>'.$row->Wilayah4.'</li>';?>
                                    <?php echo '<li>'.$row->Wilayah5.'</li>';?>
                                </ul>                                
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><?php echo $row->Potensi;?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>  
