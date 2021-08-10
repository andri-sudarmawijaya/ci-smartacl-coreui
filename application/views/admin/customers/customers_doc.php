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
        <h2>Customers List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>CustomerName</th>
		<th>ContactLastName</th>
		<th>ContactFirstName</th>
		<th>Phone</th>
		<th>AddressLine1</th>
		<th>AddressLine2</th>
		<th>City</th>
		<th>State</th>
		<th>PostalCode</th>
		<th>Country</th>
		<th>SalesRepEmployeeNumber</th>
		<th>CreditLimit</th>
		
            </tr><?php
            foreach ($customers_data as $customers)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $customers->customerName ?></td>
		      <td><?php echo $customers->contactLastName ?></td>
		      <td><?php echo $customers->contactFirstName ?></td>
		      <td><?php echo $customers->phone ?></td>
		      <td><?php echo $customers->addressLine1 ?></td>
		      <td><?php echo $customers->addressLine2 ?></td>
		      <td><?php echo $customers->city ?></td>
		      <td><?php echo $customers->state ?></td>
		      <td><?php echo $customers->postalCode ?></td>
		      <td><?php echo $customers->country ?></td>
		      <td><?php echo $customers->salesRepEmployeeNumber ?></td>
		      <td><?php echo $customers->creditLimit ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>