<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blogarticle">
  <article>
  <br /> 
    <h2><?php echo html($page->title()) ?></h2>
    <?php echo kirbytext($page->text()) ?>

    <a href="<?php echo url('blog') ?>">Back…</a>

  </article>
</section>

<?php snippet('footer') ?>