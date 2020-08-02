<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/style.css">
    <link rel="icon" href="<?php echo base_url();?>uploads/logo.png" />
      
    <script src="<?php echo base_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>plugins/fastclick/fastclick.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/app.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/demo.js"></script>
    <script src="<?php echo base_url();?>dist/js/script.js"></script>

    <script src="<?php echo base_url();?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?= base_url('plugins/jquery.countdown/jquery.countdown.min.js') ?>"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
  </head>

  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="#" class="logo">
          <span class="logo-mini">CCS</span>
          <span class="logo-lg"><b>CCS</b> Talent Night</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">                  
                  <span class="hidden-xs">  Hi, Ducjunrey <i class="fa fa-caret-down"></i></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>register" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Register</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>dashboard/logout" class="btn btn-warning btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="hide">
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-bullhorn"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>