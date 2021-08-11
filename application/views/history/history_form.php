<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">History <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">History Tabel <?php echo form_error('history_tabel') ?></label>
            <input type="text" class="form-control" name="history_tabel" id="history_tabel" placeholder="History Tabel" value="<?php echo $history_tabel; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">History Tabel Id <?php echo form_error('history_tabel_id') ?></label>
            <input type="text" class="form-control" name="history_tabel_id" id="history_tabel_id" placeholder="History Tabel Id" value="<?php echo $history_tabel_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="history_detail">History Detail <?php echo form_error('history_detail') ?></label>
            <textarea class="form-control" rows="3" name="history_detail" id="history_detail" placeholder="History Detail"><?php echo $history_detail; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">History User Name <?php echo form_error('history_user_name') ?></label>
            <input type="text" class="form-control" name="history_user_name" id="history_user_name" placeholder="History User Name" value="<?php echo $history_user_name; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">History Time <?php echo form_error('history_time') ?></label>
            <input type="text" class="form-control" name="history_time" id="history_time" placeholder="History Time" value="<?php echo $history_time; ?>" />
        </div>
	    <input type="hidden" name="history_id" value="<?php echo $history_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('history') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>