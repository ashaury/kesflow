<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kas Rumah Ashaury</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.dataTables.min.css') ?>">
    <!-- <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script> -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script> -->
</head>

<body>
    <div id="top"></div>
    <div class="sticky-top">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <h3>Alur Kas Sederhana Ashaury</h3>
            </a>
        </nav>
        <div class="row bg-white">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Pemasukan</h4>
                        <?php echo "Rp. " . number_format($debet, 2, ",", "."); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Pengeluaran</h4>
                        <?php echo "Rp. " . number_format($kredit, 2, ",", "."); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Saldo Terakhir</h4>
                        <?php echo "Rp. " . number_format($debet - $kredit, 2, ",", "."); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <a class="btn btn-success" href="<?php echo site_url('home/trans/add') ?>">Tambah Item</a>
                        <a class="btn btn-primary" href="<?php echo site_url('home/trans') ?>">Update List</a>
                    </div>
                    <div class="col-4 text-right">
                        <a class="btn btn-warning" href="#top">Up</a> <a class="btn btn-warning" href="#bottom">Down</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-stripped" id="tab-kas">
                <thead class="text-center">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Rincian</th>
                    <th>Qty</th>
                    <th>Satuan</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Jumlah</th>
                    <th>Saldo</th>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $saldo = 0;
                    $pol = 1;
                    ?>
                    <?php
                    foreach ($trans as $t) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $i ?></td>
                            <td class="text-center"><?php $tgl = strtotime($t->tanggal);
                                                    echo date("d M Y", $tgl) ?></td>
                            <td><?php echo $t->item ?></td>
                            <td class="text-center"><?php echo $t->qty ?></td>
                            <td class="text-center"><?php echo $t->sat ?></td>
                            <td class="text-right">
                                <?php
                                if ($t->jenis == "debet") {
                                    echo number_format($t->nominal, 2, ",", ".");
                                    $pol = 1;
                                }
                                ?>
                            </td>
                            <td class="text-right">
                                <?php
                                if ($t->jenis == "kredit") {
                                    echo  number_format($t->nominal, 2, ",", ".");
                                    $pol = -1;
                                }
                                ?>
                            </td>
                            <td class="text-right"><?php echo number_format(($t->qty * $t->nominal), 2, ",", "."); ?></td>
                            <td class="text-right">
                                <?php
                                $saldo = $saldo + $t->qty * $t->nominal * $pol;
                                echo number_format($saldo, 2, ",", "."); ?>
                            </td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                    <td></td>
                </tbody>
            </table>
        </div>
    </div>
    <div id="bottom"></div>
</body>
<script>
    // $(document).ready(function() {
    //     $('#tab-kas').DataTable();
    // });
</script>

</html>