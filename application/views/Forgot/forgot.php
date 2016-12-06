<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
        <header class="mdl-layout__header">
        <div class="mdl-layout__header-row" style="padding-left: 2%;">
        <a href="<?php echo base_url()."Login/"?>" class="material-icons arrow">arrow_back</a>
        <span  class="mdl-layout-title">Restore password</span>
   </div>
        </header>
    <div class="container">
    <div class="form-container form-forgot">
    <form class="" action="<?php echo base_url()."Forgot/resetPassword"?>" method="post">
            <label for="">Enter the email address to restare you password</label>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

            <input class="mdl-textfield__input" type="text" id="name" name ="email" >
            <!-- <button type="submit" name="button" class="mdl-checkbox__label btn-other">Forgot Your Password</button> -->

            <div>
              <i class="material-icons">email</i>
            </div>
      </div>

 <div class="btn">
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
     Restore
   </button>
 </div>
 <div class="error">
     <label for=""><?php echo $error;?></label>
 </div>


</form>

</div>
</div>

      </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/knockout.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/momentjs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script>

  </body>
</html>
