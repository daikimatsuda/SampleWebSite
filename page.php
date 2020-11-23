<?php get_header(); ?>
<!-- コンテンツ -->
<!-- メインコンテンツ -->
<div id="container">
  <div id="contents">
    <?php while (have_posts()): the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
  <!-- メインコンテンツ終わり -->
  <?php get_sidebar() ?>
</div>
<!-- コンテンツ終わり -->
<?php get_footer(); ?>