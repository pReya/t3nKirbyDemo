<?php snippet('header') ?>

<section class="content blog">

  <h1><?php echo $page->title()->html() ?></h1>
  <?php echo $page->text()->kirbytext() ?>

  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <article>
  	<time class="date" datetime="<?php echo $article->date('c') ?>" pubdate="pubdate" style="opacity: 0.5; font-weight: 300; font-size: 0.8em;"><?php echo strftime('%e. %B %Y', $article->date()); ?></time>
    <a href="<?php echo $article->url() ?>"><h1><?php echo $article->title()->html() ?></h1></a>
    <p style="padding-bottom: 1em; border-bottom: 1px solid #ddd; margin-bottom: 1.5em;"><?php echo $article->text()->excerpt(300) ?></p>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>