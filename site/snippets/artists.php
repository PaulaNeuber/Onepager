<section id="artists">
  <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?>

  <ul>
    <?php foreach($data->children()->visible() as $artist): ?>
      <li>
        <figure>
          <img src="<?php echo $artist->images()->first()->url() ?>" alt="<?php echo $artist->title()->html() ?>">
        </figure>
      </li>
    <?php endforeach ?>
  </ul>
</section>