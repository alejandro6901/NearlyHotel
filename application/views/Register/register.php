<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" >
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" >
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <main class="demo-main mdl-layout__content">
    <div class="demo-container mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="cont demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
      <!-- Always shows a header, even in smaller screens. -->
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row" style="padding-left: 2%;">
      <!--back arrow-->
      <a href="<?php echo base_url().'Login'?>" id="span" class="material-icons arrow">arrow_back</a>
      <!--Title-->
      <span  class="mdl-layout-title">Create Account</span>
  </div>
      </header>
    <div class="container-re">
    <div class="form-container">
    <form class="" action="<?php echo base_url().'index.php/Register/registerUser'?>" method="post">

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

            <input class="mdl-textfield__input" type="text" id="first_name" name="first_name"  >
            <label class="mdl-textfield__label" for="first_name">First Name</label>
            <div>
              <i class="material-icons">account_circle</i>
            </div>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" id="last_name" name="last_name" >
          <label class="mdl-textfield__label" for="last_name">Last Name</label>
          <div>
              <i class="material-icons">people_outline</i>
          </div>
    </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <input class="mdl-textfield__input" type="email" id="email" name="email" >
  <label class="mdl-textfield__label" for="email">Email</label>
  <div >
    <i class="material-icons">email</i>
  </div>
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
<input class="mdl-textfield__input" type="password" id="password" name="password" >
<label class="mdl-textfield__label" for="password">Password</label>
<div >
  <i class="material-icons">vpn_key</i>
</div>
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

<label class="mdl-textfield__label" for="date" >Date</label>
   <input type="text" id="datepicker" name="date">
<div >

<i class="material-icons">date_range</i>
</div>
</div>
<br>

 <div class="btn">
   <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      Register
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/knockout.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/momentjs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script>

  </body>
</html>
