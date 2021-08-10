<?php ?>

        <!-- CoreUI and necessary plugins-->
        <script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/popper.js/dist/umd/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/pace-progress/pace.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/@coreui/coreui/dist/js/coreui.min.js'); ?>"></script>

        <!-- Plugins and scripts required by this view-->
        <?php if($this->uri->segment(1) == 
        'dashboard' || 'perusahaan' || 'purchase_order' ): ?>
                <script src="<?php echo base_url('node_modules/chart.js/dist/Chart.min.js'); ?>"></script>
                <script src="<?php echo base_url('node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js'); ?>"></script>
                <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
        <?php endif ?>
        <?php
            $segment = $this->uri->segment(2); 
            switch ($segment) {
                case 'dashboard':
                        echo("<script type='text/javascript' src=" .  base_url('node_modules/chart.js/dist/Chart.min.js') . "></script>");
                        echo("<script type='text/javascript' src=" .  base_url('node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js') . "></script>");
                        echo("<script type='text/javascript' src=" .  base_url('assets/js/main.js') . "></script>");
                break;
                case 'create':
                case 'create_action':
                case 'update':
                case 'update_action':
                        echo("<script type='text/javascript' src=" .  base_url('vendors/select2-4.1.0-rc.0/dist/js/select2.full.min.js') . "></script>");
                break;
                default:
                //code to be executed if n is different from all labels;
            }
        ?>


