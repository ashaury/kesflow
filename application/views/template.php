<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kas Rumah Ashaury</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <?php
    if (isset($output) && $output != null) {
        foreach ($css_files as $file) : ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach;
    }
    ?>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo base_url() ?>">
            <h3>Alur Kas Sederhana Ashaury</h3>
        </a>
    </nav>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="<?php echo base_url() ?>">Home</a>
        </div>  
        <div class="card-body">
            <?php
            // $this->load->view($page);
            if (isset($output) && $output != null) {
                echo $output;
            }
            ?>
        </div>
    </div>
    </div>
    <?php
    if (isset($output) && $output != null) {
        foreach ($js_files as $file) : ?>
            <script src="<?php echo $file; ?>"></script>
    <?php endforeach;
    } ?>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>

</html>