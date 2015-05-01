<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
  

<section class="gallery">
  <?php foreach($page->lightbox() ?>
  <?php endforeach ?>
</section>
</div>

     
      
    

  </main>

<?php snippet('footer') ?>
