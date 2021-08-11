<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>History List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>History Tabel</th>
		<th>History Tabel Id</th>
		<th>History Detail</th>
		<th>History User Name</th>
		<th>History Time</th>
		
            </tr><?php
            foreach ($history_data as $history)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $history->history_tabel ?></td>
		      <td><?php echo $history->history_tabel_id ?></td>
		      <td><?php echo $history->history_detail ?></td>
		      <td><?php echo $history->history_user_name ?></td>
		      <td><?php echo $history->history_time ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>