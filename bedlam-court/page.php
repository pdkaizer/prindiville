<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bedlam Court
 */

get_header(); ?>

  <div class="row">
      <div class="span8 bottom"> 
          	<?php while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title();?></h2>
	
				<?php the_content();?>

			<?php endwhile; ?>
      </div>
  </div>

<?php get_footer(); ?>