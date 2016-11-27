<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <script type="text/javascript" src="<php? echo base_url().'assets/js/jquery.js'?>"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" >

  </head>
  <body>
      <?php

      if(isset($_SESSION['user'])){
           $user = $_SESSION['user'];

      }

       ?>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">


    <main class="demo-main mdl-layout__content">
    <div class="demo-container mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="cont demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
      <span class="mdl-layout-title">Edit Profile<i class="material-icons md-30">create</i></span>
       <?php echo $user['first_name'] ?>
  </header>
  <div class="iconocar">
   <img src="<?php echo base_url(); ?>assets/img/logo7.png" alt="" class="imagen"/>
   </div>
   <div class="space"><i class="material-icons">insert_photo</i><span class="mdl-checkbox__label">Change Photo</span>
   </div>
   <div class="space"><i class="material-icons">vpn_key</i><span class="mdl-checkbox__label">Change Password</span>
   </div>
   <div class="space"><i class="material-icons">person</i><span class="mdl-checkbox__label">Change Personal Data</span>
   </div>
   <div class="space"><i class="material-icons">create</i><span class="mdl-checkbox__label">Change Nickname and Car color</span>
   </div>
   <div class="btn nicknamediv spaceUp">
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
     Finish
   </button>
 </div>
  <div class="container">
    <div class="form-container">
</div>
</div>
      </div>
    </div>
    </main>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script>
  </body>
</html>
