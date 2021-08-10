<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php get_header() ?> 
</head>

<body <?php body_class(); ?>>

<?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>
	<?php get_template_part( 'includes/global_header' ); // ヘッダー ?>



  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php the_post_thumbnail(array(300,300),array('alt'=>'アイキャッチ画像')); ?>
         <?php the_content() ?>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_footer() ?> 

</body>

</html>
