<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blog">
<!--
  <br />
  <h1><?php echo html($page->title()) ?></h1>
-->
  <?php echo kirbytext($page->text()) ?>
  <?php foreach($page->children()->visible()->flip() as $article): ?>
  
  <article>
    <h2><?php echo html($article->title()) ?></h2>
	<h3>Posted on <time datetime="<?php echo $article->date('Y-m-d') ?>"><?php echo $article->date('F j, Y') ?></time></h3>
    <p><?php echo excerpt($article->text(), 300) ?></p>
    <a href="<?php echo $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>