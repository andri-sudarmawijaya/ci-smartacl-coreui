<?php
$_SESSION['token']['key'] = bin2hex(random_bytes(32));
$_SESSION['token']['value'] = time() . bin2hex(random_bytes(32));

$token_key = $_SESSION['token']['key'];
$token_val = $_SESSION['token']['value'];
?>

<html lang="en">

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
  <!-- Main styles for this application-->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
  <noscript>
    <strong>We're sorry but this app doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
  </noscript>
  <div class="c-app flex-row align-items-center">
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-6">
          <div class="card">
            <form action="<?php echo base_url('admin/forgot_password'); ?>" method="post">
              <div class="card-header">
                <h5>Admin Password Recovery</h5>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" class="form-control" />
                  <input type="hidden" name="token_key" value="<?php echo $token_key; ?>">
                  <input type="hidden" name="token_val" value="<?php echo $token_val; ?>">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                <a class="btn btn-outline-dark" href="<?php echo base_url('admin/login'); ?>"> Log in</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('node_modules/@coreui/coreui/dist/js/coreui.min.js'); ?>"></script>
</body>

</html>