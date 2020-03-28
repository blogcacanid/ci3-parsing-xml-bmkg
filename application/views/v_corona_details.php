<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>Parsing Data JSON Info Corona CodeIgniter 3</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/adminlte.min.css'?>">
</head>
<body>
    <div class="card" style="font-style: Calibri;font-size:12px">
        <div class="card-header">
            <h2>Details Corona Terakhir COVID-19</h2>
        </div>
        <div class="card-header">
            <b>Last Update : </b><?php echo $datalist['datas']['date_string'];?>
        </div>
        <div class="card-body">
            <table id="data_corona" class="table table-bordered table-striped" style="font-style: Calibri;font-size:12px">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kasus</th>
                        <th>Warga Negara</th>
                        <th>Gender</th>
                        <th>Umur</th>
                        <th>Pengumuman</th>
                        <th>Penularan</th>
                        <th>Klaster</th>
                        <th>Status</th>
                        <th>Rumah Sakit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=0;
                        foreach($datalist['nodes'] as $row){
                            $no++;
                            foreach ($row as $key => $value ) {
                               $$key=$value;
                           }                    
                    ?>
                        <tr>
                            <td><?php echo number_format($no);?></td>
                            <td><?php echo $kasus;?></td>
                            <td><?php echo $wn;?></td>
                            <td><?php echo $gender;?></td>
                            <td><?php echo $umurtext;?></td>
                            <td><?php echo $pengumuman;?></td>
                            <td><?php echo $penularan;?></td>
                            <td><?php echo $klaster;?></td>
                            <td><?php echo $status;?></td>
                            <td><?php echo $rs;?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Kasus</th>
                        <th>Warga Negara</th>
                        <th>Gender</th>
                        <th>Umur</th>
                        <th>Pengumuman</th>
                        <th>Penularan</th>
                        <th>Klaster</th>
                        <th>Status</th>
                        <th>Rumah Sakit</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/dist/js/adminlte.min.js'?>"></script>
    <script>
      $(function () {
        $('#data_corona').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        });
      });
    </script>
</body>
</html>  
