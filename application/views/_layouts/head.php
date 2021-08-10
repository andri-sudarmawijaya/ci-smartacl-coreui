
    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>CoreUI Free Bootstrap Admin Template</title>
        <!-- Icons-->
        <link href="<?php echo base_url('node_modules/@coreui/icons/css/coreui-icons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('node_modules/flag-icon-css/css/flag-icon.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('node_modules/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('node_modules/simple-line-icons/css/simple-line-icons.css'); ?>" rel="stylesheet">
        <!-- Main styles for this application-->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/pace-progress/css/pace.min.css'); ?>" rel="stylesheet">
        <?php if( $this->uri->segment(2) == 'update' || $this->uri->segment(2) == 'create'): ?>
            <link href="<?php echo base_url('/vendors/select2-4.1.0-rc.0/dist/css/select2.min.css'); ?>" rel="stylesheet">    
            <!-- <link href="<?php // echo base_url('/vendors/select2-bootstrap-theme/dist/select2-bootstrap.min.css'); ?>" rel="stylesheet"> -->
   
        <?php endif ?>
        <?php
            $segment = $this->uri->segment(2); 
            switch ($segment) {
                case 'create':
                case 'create_action':
                case 'update':
                case 'update_action':
                    echo ("<link href=". base_url('vendors/select2-bootstrap-theme/dist/select2-bootstrap.min.css')  . " rel='stylesheet'> ");
                break;
                default:
                //code to be executed if n is different from all labels;
            }
        ?>


    </head>
