<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mapa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" >
      <?php echo $map['js']?>

  </head>
  <body>


    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">


    <main class="demo-main mdl-layout__content">
    <div class="demo-container mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="cont demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">

  <div class="mdl-grid aline">
  <div class="mdl-cell mdl-cell--4-col tamano">
    <a  href="<?php echo base_url()."Settings/show_settings"?>" class="mdl-checkbox__label map_row btn-other">   <i class="material-icons line">view_headline</i></a>


  </div>
  <div class="mdl-cell mdl-cell--4-col titlemap tamano">
    <span class="mdl-layout-title">Map</span>
  </div>
  <div class="mdl-cell mdl-cell--4-col tamano">
  <i class="material-icons line2">more_vert</i>
  </div>
</div>
  </header>


  <div class="container">

      <?php echo $map['html']?>

</div>
      </div>
    </div>
    </main>

    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script> -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2xe6AzQBlOO16HUJ3F0PpEc8zuyzgwqY&callback=initMap"
  type="text/javascript"></script>
  </body>
</html>
