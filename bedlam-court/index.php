<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bedlam Court
 */

get_header(); ?>

  <div class="row">
      <div class="span8">
          
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<?php the_content();?>

      </div>
  </div>

  <div class="row">
      <div class="span8 bottom next">
        <?php previous_posts_link('&lt;') ?> | <?php the_date();?> | <?php next_posts_link('&gt;','') ?> 
      </div>
  </div>

		<?php endwhile; ?>




<?php get_footer(); ?>

