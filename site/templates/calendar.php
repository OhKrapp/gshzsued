

<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>

      <?php $calendar = calendar($page->calendar()->yaml()); ?>

      <?php
    snippet('calendar-table', array(
        'calendar'  => $calendar,
        'fields'        => array(
            'summary'       => l::get('title'),
            'description'   => l::get('description'),
            '_begin_date'   => l::get('_begin_date'),
            '_end_date'   => l::get('_end_date')
        )
    ));
?>

  </main>

<?php snippet('footer') ?>