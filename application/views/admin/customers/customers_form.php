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
        <h2 style="margin-top:0px">Customers <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">CustomerName <?php echo form_error('customerName') ?></label>
            <input type="text" class="form-control" name="customerName" id="customerName" placeholder="CustomerName" value="<?php echo $customerName; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ContactLastName <?php echo form_error('contactLastName') ?></label>
            <input type="text" class="form-control" name="contactLastName" id="contactLastName" placeholder="ContactLastName" value="<?php echo $contactLastName; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ContactFirstName <?php echo form_error('contactFirstName') ?></label>
            <input type="text" class="form-control" name="contactFirstName" id="contactFirstName" placeholder="ContactFirstName" value="<?php echo $contactFirstName; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Phone <?php echo form_error('phone') ?></label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">AddressLine1 <?php echo form_error('addressLine1') ?></label>
            <input type="text" class="form-control" name="addressLine1" id="addressLine1" placeholder="AddressLine1" value="<?php echo $addressLine1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">AddressLine2 <?php echo form_error('addressLine2') ?></label>
            <input type="text" class="form-control" name="addressLine2" id="addressLine2" placeholder="AddressLine2" value="<?php echo $addressLine2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">City <?php echo form_error('city') ?></label>
            <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?php echo $city; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">State <?php echo form_error('state') ?></label>
            <input type="text" class="form-control" name="state" id="state" placeholder="State" value="<?php echo $state; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PostalCode <?php echo form_error('postalCode') ?></label>
            <input type="text" class="form-control" name="postalCode" id="postalCode" placeholder="PostalCode" value="<?php echo $postalCode; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Country <?php echo form_error('country') ?></label>
            <input type="text" class="form-control" name="country" id="country" placeholder="Country" value="<?php echo $country; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">SalesRepEmployeeNumber <?php echo form_error('salesRepEmployeeNumber') ?></label>
            <input type="text" class="form-control" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber" placeholder="SalesRepEmployeeNumber" value="<?php echo $salesRepEmployeeNumber; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">CreditLimit <?php echo form_error('creditLimit') ?></label>
            <input type="text" class="form-control" name="creditLimit" id="creditLimit" placeholder="CreditLimit" value="<?php echo $creditLimit; ?>" />
        </div>
	    <input type="hidden" name="customerNumber" value="<?php echo $customerNumber; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('customers') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>