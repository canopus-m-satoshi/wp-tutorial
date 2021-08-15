<?php wp_body_open(); ?>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.html">Sample Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<?php if(is_single()): ?>
<!-- Page Header -->
<?php 
$eyecatch =get_eyecatch_with_default();
  ?>
<header class="masthead" style="background-image: url('<?php echo $eyecatch[0]; ?>')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php the_title(); ?></h1>
          <h2 class="subheading"><?php the_excerpt() ?></h2>
          <span class="meta">Posted by
            <?php the_author(); ?>
            on <?php echo get_the_date(); ?></span>
        </div>
      </div>
    </div>
  </div>
</header>

<?php elseif(is_page()): ?>
<!-- Page Header -->
<?php 
$eyecatch =get_eyecatch_with_default();
  ?>
<header class="masthead" style="background-image: url('<?php echo $eyecatch[0]; ?>')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</header>
<?php elseif(is_archive()||is_category()): ?>
<!-- Page Header -->
<?php 
$eyecatch =get_eyecatch_with_default();
  ?>
<header class="masthead" style="background-image: url('<?php echo $eyecatch[0]; ?>')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <?php if (is_category()): ?>
          <h1>Category</h1>
          <?php elseif(is_author()): ?>
          <h1>Author</h1>
          <?php else: ?>
          <h1>Tag</h1>
          <?php endif ?>
          <span class="subheading"><?php wp_title('') ?></span>
        </div>
      </div>
    </div>
  </div>
</header>
<?php else: ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog <?php echo date('Y') ?></h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>
<?php endif ?>