<section id="<?php echo $data->uid() ?>" class="artists">
  <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?>

  <ul><!-- 
     --><?php foreach($data->children()->visible() as $artist): ?><!-- 
       --><li>
        <figure>
          <?php if($artist->images()->first()): ?>
            <div class="inner">
              <a href="<?php echo $artist->url() ?>">
                <img src="<?php echo $artist->images()->first()->url() ?>" alt="<?php echo $artist->title()->html() ?>">
              </a>
              <div class="overlay">
                <div class="overlay__inner">
                  <?php echo $artist->title() ?>
                <div class="overlay">
              </div>
            </div>
          <?php endif ?>
        </figure>
      </li><!-- 
     --><?php endforeach ?><!-- 
   --></ul>
</section>