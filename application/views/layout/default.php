<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <title>Band Info</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">

    </head>

    <body>
        <?php $this->load->view('includes/header'); ?>
        <div class="container">
            <?php echo $content; ?>
        </div>
        <?php //$this->load->view('includes/footer'); ?>
    </body>
</html>