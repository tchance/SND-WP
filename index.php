<?php get_header(); ?>


<div id="main" class="container">
	<div id="content" class="row">
        <div id="headline" class="row">
        <h1>News</h1>
        </div>
        <div id="body" class="span8">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		   <div class="apost">
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?> </h2></a>
			<h5><small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small></h5>
			<p><?php the_content(); ?></p>
                   </div>
		<?php endwhile; ?>
		<?php endif; ?>
        </div>
        
        <?php get_sidebar(); ?>
        
        </div>
        
        <div id="under" class="row">
        	<div id="theribbon" class="span12 hidden-phone hidden-tablet">
			<div class="ribbon"><p><b>IT’S THE TRUTH #4: </b>Louisville, named after King Louis XVI of France, was founded in 1778 by George Rogers Clark.<p></div>
            </div>
		</div>
       
	   
<?php get_footer(); ?>