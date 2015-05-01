<!DOCTYPE html>
<html lang="de">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <?php echo css('assets/css/main.css') ?>
  <?php echo css('assets/css/responsiveslides.css') ?>
  <?php echo css("http://cdn.rawgit.com/noelboss/featherlight/master/release/featherlight.min.css"); ?>


  <?php echo js('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js') ?>
  <?php echo js('assets/js/responsiveslides.js') ?>

  <?php echo js("http://cdn.rawgit.com/noelboss/featherlight/master/release/featherlight.min.js") ; ?>
  

</head>
<body>

  <header class="header cf" role="banner">
   <div>
     
   <a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/logo_01.png') ?>" alt="<?php echo $site->title()->html() ?>" />
    </a>
    <?php snippet('menu') ?>

    </div> 
  </header>