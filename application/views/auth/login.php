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
  <link href="<?php echo base_url('node_modules/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
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
        <div class="col-md-8">
          <?php $this->load->view('/alerts');?>
          <div class="card-group">
            <div class="card p-4 bg-success text-white">
              <div class="card-body">
                <form action="<?php echo base_url('login'); ?>" method="post">
                  <h1>Login</h1>
                  <p class="text-muted">Sign In to your account</p>
                  <div role="group" class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-user"></i>
                        </span>
                      </div>
                      <input id="uid-uw5lvwq9md" type="text" placeholder="Username" name="username" autocomplete="username" class="form-control" value="">
                    </div>
                  </div>
                  <div role="group" class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-lock"></i>
                        </span>
                      </div>
                      <input id="uid-u0rbnzin5y9" type="password" placeholder="Password" name="password" autocomplete="current-password" class="form-control">
                    </div>
                  </div>
                  <div role="group" class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1">
                      <label class="form-check-label" for="remember"> Remember Me </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="text-left col-5">
                      <input type="hidden" name="token_key" value="<?php echo $token_key; ?>">
                      <input type="hidden" name="token_val" value="<?php echo $token_val; ?>">
                      <button type="submit" class="btn px-4 btn-success"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Login</button>
                    </div>
                    <div class="text-right align-items-center col-7">
                      <a class="text-white" href="<?php echo base_url('forgot_password'); ?>">Forgot your password?</a>
                      <a class="btn d-lg-none bg-light btn-link" href="<?php echo base_url('register'); ?>"> Register now!</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card text-center d-md-down-none">
              <div class="card-body">
                <div class="card-body">
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Don't have an account?&nbsp; <br />
                    <a class="btn btn-outline-dark" href="<?php echo base_url('register'); ?>"><span><i class="fa fa-user-plus" aria-hidden="true"></i></span> Sign Up</a>
                  </p>
                </div>
              </div>
            </div>
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