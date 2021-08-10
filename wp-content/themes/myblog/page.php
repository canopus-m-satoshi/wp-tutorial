<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php get_header() ?> 
</head>

<body <?php body_class(); ?>>
<?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>
<?php get_template_part( 'includes/global_header' ); // ヘッダー ?>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
       <?php the_content(); ?>
      </div>
    </div>
  </div>
  <hr>

  <?php endwhile; ?>
  <?php endif; ?>

  <!-- Footer -->
  <?php get_footer() ?> 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
