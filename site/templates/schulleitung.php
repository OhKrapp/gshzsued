<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

   

    <div class="profile">
    <li><b>Rektor:</b><?php echo $page->Rektor() ?></li>
        <img class="avatar" src="" alt="<?php echo $page->Rektor() ?>">
    </div>

     <div class="profile">
    <li><b>Co-Rektorin:</b><?php echo $page->CoRektor() ?></li>
        <img class="avatar" src="" alt="<?php echo $page->Rektor() ?>">
    </div>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>

      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>
    </div>


  </main>

<?php snippet('footer') ?>