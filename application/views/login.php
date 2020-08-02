<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CCS Talent Night</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/iCheck/square/blue.css">
    
    <link rel="icon" href="<?php echo base_url();?>uploads/logo.png" />
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <?php 
            $image = array(
                'src' => 'uploads/logo.png',
                'width' => '250',
                'height' => '250'
            );   
            echo img($image);
        ?>
        <br />
        <a href="<?php echo base_url();?>dashboard"><b>CCS Talent Night</b></a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start tabulation</p>
        <div class="alert alert-danger <?php if(!isset($_GET['login'])) echo 'hide';?>">
            <strong>Error!</strong> Invalid user/password!
        </div>
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <?php echo form_open('login'); ?>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="user" autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="pass">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
            <button type="submit" class="btn btn-primary btn-block btn-flat pull-left">Login</button>
            <div class="row">
          </div>
        </form> 
          </div>
              </div>
        <p align="center">&copy; Team CCSTalentNight - <a href="#">www.scsit.edu.ph</a></p> 
    <script src="<?php echo base_url();?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
