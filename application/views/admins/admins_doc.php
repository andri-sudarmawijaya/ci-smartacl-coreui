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
        <h2>Admins List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Username</th>
		<th>Password</th>
		<th>Name</th>
		<th>Email</th>
		<th>Role Id</th>
		<th>Status</th>
		<th>Last Login</th>
		<th>Ip</th>
		<th>Email Verified At</th>
		<th>Email Activator</th>
		<th>Email Activator Code</th>
		<th>Remember Token</th>
		<th>Remember Token Code</th>
		<th>Created At</th>
		<th>Updated At</th>
		
            </tr><?php
            foreach ($admins_data as $admins)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $admins->username ?></td>
		      <td><?php echo $admins->password ?></td>
		      <td><?php echo $admins->name ?></td>
		      <td><?php echo $admins->email ?></td>
		      <td><?php echo $admins->role_id ?></td>
		      <td><?php echo $admins->status ?></td>
		      <td><?php echo $admins->last_login ?></td>
		      <td><?php echo $admins->ip ?></td>
		      <td><?php echo $admins->email_verified_at ?></td>
		      <td><?php echo $admins->email_activator ?></td>
		      <td><?php echo $admins->email_activator_code ?></td>
		      <td><?php echo $admins->remember_token ?></td>
		      <td><?php echo $admins->remember_token_code ?></td>
		      <td><?php echo $admins->created_at ?></td>
		      <td><?php echo $admins->updated_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>