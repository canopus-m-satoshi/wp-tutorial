<!DOCTYPE html>
<html lang="en">

<head>
<?php get_header() ?> 
</head>

<body>

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

  <?php get_footer() ?> 

</body>

</html>
