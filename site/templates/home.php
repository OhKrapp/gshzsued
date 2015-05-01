<?php snippet('header') ?>
<section>

<h1 class="welcome">
	Willkommen in der Grundschule Augsburg Hochzoll-Süd
</h1>
	
<div class="rslides">

    <?php $n=0; foreach($page->images() as $image): $n++; ?>
    <li class="<?php if($n==1) echo ' active' ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>" />
      
    </li>
    <?php endforeach ?>


</div>


 <?php snippet('footer') ?>
</section>



