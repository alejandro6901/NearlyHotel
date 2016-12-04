<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
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
      <!-- Always shows a header, even in smaller screens. -->

      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row" style="padding-left: 2%;">
      <!--back arrow-->
      <a href="<?php echo base_url()."FirstLog/show_firstLog"?>" id="span" class="material-icons arrow">arrow_back</a>
      <!--Title-->
      
      <span  class="mdl-layout-title">Personal Data</span>     
       </div>

      </header>
    <div class="container-re">
    <div class="form-container">
    <?php foreach ($single_user as $user): ?>
    <form class="" action="<?php echo base_url().'ChangePersonalData/updatePersonalData'?>" method="post">

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
       <input class="mdl-textfield__input" name ="firstName" value="<?php echo $user->first_name; ?>">
       <label class="mdl-textfield__label">First Name</label>
    </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
         <input class="mdl-textfield__input" name ="lastName" value="<?php echo $user->last_name; ?>">
         <label class="mdl-textfield__label">Last Name</label>
       </div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

<label class="mdl-textfield__label" for="date" required>Date</label>
   <input type="text" id="datepicker" name="date">
<div >

<i class="material-icons">date_range</i>
</div>
</div>
<br>
 <div class="btn">
   <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      Save
   </button>
 </div>
</form>
<?php endforeach; ?>
</div>
</div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script>
  </body>
</html>