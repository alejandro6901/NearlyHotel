<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" >

  </head>
  <body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <main class="demo-main mdl-layout__content">
    <div class="demo-container mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="cont demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
      <div class="img">
          <img src="<?php echo base_url(); ?>assets/img/logo7.png" alt="" />
      </div>
      <hr class="hr">
    <div class="container">
    <div class="form-container">
    <form class="" action="<?php echo base_url()."index.php/Login/authenticate"?>" method="post">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="email"name="email">
    <label class="mdl-textfield__label" for="email">Email</label>
    <div>
        <i class="material-icons">email</i>
    </div>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <input class="mdl-textfield__input" type="password" id="pass" name ="password">
  <label class="mdl-textfield__label" for="pass">Password</label>
  <div >
    <i class="material-icons">vpn_key</i>
  </div>
</div>
 <div class="btn">
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
     Login
   </button>
 </div>
  <hr>
 <div class="other-op">
  <div class="margin">
    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
      <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
      <span class="mdl-checkbox__label">Keep Logged </span>

    </label>
  </div>
<div class="margin">
  <a  href="<?php echo base_url()."index.php/Register/show_register"?>" class="mdl-checkbox__label btn-other">Create Account</a>
</div>
  <div class="">
    <a href="<?php echo base_url()."index.php/Forgot/show_forgot"?>" class="mdl-checkbox__label btn-other">Forgot Your Password?</a>
  </div>
       <!-- <label for=""><?php echo $error ?></label> -->
 </div>
</form>
</div>
</div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script>
  </body>
</html>
