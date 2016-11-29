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
  <header class="mdl-layout__header">
      <span class="mdl-layout-title">Principal Settings</span>
  </header>

<div class="iconocar">
<i class="material-icons md-70 md-dark" id="changecolor">time_to_leave</i>
</div>
<form  action="<?php echo base_url()."index.php/FirstLog/registerDataFirstLog"?>" method="post">
  <hr class="hr">


  <div class="colors">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
             <input class="mdl-textfield__input" type="text" id="drop"  name="color" >
             <label for="drop" class="mdl-textfield__label">Choose one color for your car</label>
             <select for="drop" class="mdl-menu mdl-menu--bottom-left mdl-js-menu" name="id_color">
               <?php foreach ($color as $colors):?>
                <option class="mdl-menu__item" name="id_color" value="<?php echo $colors['id']?>" id="<?php echo $colors['color_name']?>">
                  <?php echo $colors['color_name'] ?></option>
                <?php endforeach; ?>
            </select>
         </div>
</div>

  <div class="nicknamediv">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="nickname" id="nick"  name="nickname">
    <label class="mdl-textfield__label" for="nick" >Nickname</label>
    <div >
      <i class="material-icons">perm_identity</i>
    </div>
  </div>
  </div>
  <div class="btn nicknamediv">
     <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
       Continue
           <i class="material-icons">fast_forward</i>
     </button>
     <label for=""><?php  echo $error ?></label>
   </div>
</form>
      </div>
    </div>
    </main>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/get.js"></script>

  </body>
</html>
