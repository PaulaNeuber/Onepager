<section id="<?php echo $data->uid() ?>">
<div class="container">
</div>
  <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?>
</section>