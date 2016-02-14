<?php snippet('header') ?>

<section class="content blogarticle">
  <article>
  	<time class="date" datetime="<?php echo $page->date('c') ?>" pubdate="pubdate" style="opacity: 0.5; font-weight: 300; font-size: 0.8em;"><?php echo strftime('%e. %B %Y', $page->date()); ?></time>
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
  </article>
</section>

<?php snippet('footer') ?>