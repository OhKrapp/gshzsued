<?php snippet('header') ?>

<section class="main">
	


<!-- articles -->
<?php foreach($articles as $article): ?>
<article>
  <h1><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
  <?php echo kirbytext ($article->Date()) ?>
  <p><?php echo kirbytext($article->Intro()) ?></p>
  <a href="<?php echo $article->url() ?>">Lesen Sie mehr...</a>
</article>
<?php endforeach ?>
</section>


<!-- sidebar with tagcloud -->
<!--<aside>
  <h1>Tags</h1>
  <ul class="tags">
    <?php foreach($tags as $tag): ?>
    <li>
      <a href="<?php echo $page->url() . '/tag:' . $tag ?>">
        <?php echo html($tag) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</aside>

<!-- pagination -->
<nav class="pagination">
  <?php if($pagination->hasPrevPage()): ?>
  <a href="<?php echo $pagination->prevPageUrl() ?>">previous posts</a>
  <?php endif ?>

  <?php if($pagination->hasNextPage()): ?>
  <a href="<?php echo $pagination->nextPageUrl() ?>">next posts</a>
  <?php endif ?>
</nav>

<?php snippet('footer') ?>