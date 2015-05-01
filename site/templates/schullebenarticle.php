<?php snippet('header') ?>

<section class="main">
  <article>
    <h1><?php echo html ($page->title())?></h1>
    <h3> <?php echo $page->date('d/m/Y')?></h3>
    <h6>Klassen: <?php echo kirbytext ($page->Klasse())?></h6>
    <?php echo kirbytext ($page->intro()) ?>
    <?php echo kirbytext ($page->text()) ?>


    <a href="<?php echo url('schulleben') ?>">Zurück…</a>

  </article>
</section>

<?php snippet('footer') ?>