<section id="<?php echo $data->uid() ?>">
<div id="logo">
<img src="../onepager/content/01-lndm/logo.png" class="responsive-image">
</div>
  <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?>
</section>