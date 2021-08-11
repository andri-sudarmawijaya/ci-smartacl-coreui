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
        <h2 style="margin-top:0px">History Read</h2>
        <table class="table">
	    <tr><td>History Tabel</td><td><?php echo $history_tabel; ?></td></tr>
	    <tr><td>History Tabel Id</td><td><?php echo $history_tabel_id; ?></td></tr>
	    <tr><td>History Detail</td><td><?php echo $history_detail; ?></td></tr>
	    <tr><td>History User Name</td><td><?php echo $history_user_name; ?></td></tr>
	    <tr><td>History Time</td><td><?php echo $history_time; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('history') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>