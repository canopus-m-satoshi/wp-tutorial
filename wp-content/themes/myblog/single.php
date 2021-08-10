<!DOCTYPE html>
<html lang="en">

<head>
<?php get_header() ?> 
</head>

<body>

<?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>
	<?php get_template_part( 'includes/global_header' ); // ヘッダー ?>



  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
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
