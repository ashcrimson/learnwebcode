<?php

/*
Template Name: Special Layout
*/

get_header();

if(have_posts()) :
	while (have_posts()) : the_post(); ?>
		
		<article class="post page">
			<h2><?php the_title()?></h2>

			<!-- info-box -->
			<div class="info-box">
				<h4>Disclaimer Title</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae velit obcaecati necessitatibus aliquid ullam, eos nam sed ab quis praesentium in esse unde dolores iusto deleniti quos dolore facilis animi.</p>
			</div><!-- /info-box -->
			<?php the_content();?>
		</article>
	<?php endwhile;

	else:
		echo '<p>No content found</p>';
	endif;

get_footer();

?>