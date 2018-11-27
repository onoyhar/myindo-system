<?php
  include('cekhrd.php');
  include("../../db_connect.php");
  include("function.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Human Resource Manager | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../core/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../core/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../core/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../core/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../core/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../core/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../core/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../core/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../core/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../core/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
      a[data-str="non-active"] {
          background-color: RED;
          color:white;
        }
        a[data-str="non-active"]:hover {
            background-color: RED;
            color:white;
          }

      a[data-str="active"] {
          background-color: #00cc00;
          color:white;
          pointer-events: none;
          cursor: default;
          text-decoration: none;
          color: white;

        }

  </style>

</head>
<body class="hold-transition skin-yellow-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HRD</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HRD</b> Department</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">

      </div>
    </nav>
  </header>
