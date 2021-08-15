<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header() ?>
</head>

<body <?php body_class(); ?>>

  <?php get_template_part( 'includes/global_header' ); // ヘッダー ?>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <hr>
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <div class="post-preview">
          <a href="<?php the_permalink() ?>">
            <h2 class="post-title">
              <?php the_title(); ?>
            </h2>
            <h3 class="post-subtitle">
              <?php the_content() ?>
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php the_author() ?></a>
            on <?php echo get_the_date(); ?>
          </p>
        </div>
        <hr>
        <!-- Pager -->
        <?php endwhile; ?>
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
        <?php else: ?>
        <p>No articel founded</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <hr>

  <?php get_footer() ?>

</body>

</html>