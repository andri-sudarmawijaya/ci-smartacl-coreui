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
        <h2 style="margin-top:0px">Customers Read</h2>
        <table class="table">
	    <tr><td>CustomerName</td><td><?php echo $customerName; ?></td></tr>
	    <tr><td>ContactLastName</td><td><?php echo $contactLastName; ?></td></tr>
	    <tr><td>ContactFirstName</td><td><?php echo $contactFirstName; ?></td></tr>
	    <tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
	    <tr><td>AddressLine1</td><td><?php echo $addressLine1; ?></td></tr>
	    <tr><td>AddressLine2</td><td><?php echo $addressLine2; ?></td></tr>
	    <tr><td>City</td><td><?php echo $city; ?></td></tr>
	    <tr><td>State</td><td><?php echo $state; ?></td></tr>
	    <tr><td>PostalCode</td><td><?php echo $postalCode; ?></td></tr>
	    <tr><td>Country</td><td><?php echo $country; ?></td></tr>
	    <tr><td>SalesRepEmployeeNumber</td><td><?php echo $salesRepEmployeeNumber; ?></td></tr>
	    <tr><td>CreditLimit</td><td><?php echo $creditLimit; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('customers') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>