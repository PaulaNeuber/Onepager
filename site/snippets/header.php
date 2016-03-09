<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,400italic,700,600' rel='stylesheet' type='text/css'>
</head>
<body>
  <header class="header cf" role="banner">
    <?php snippet('menu') ?>
  </header>