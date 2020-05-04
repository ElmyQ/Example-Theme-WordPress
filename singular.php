<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php get_header(); ?>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?> 
      <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); // Output HTML-formatted content. ?>
      </article>
      <nav>
        <a href="<?php echo site_url(); ?>">
          Go Back
        </a>
      </nav>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>

    
</body>
</html>