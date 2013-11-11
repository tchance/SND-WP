<?php get_header(); ?>


<div id="main" class="container">
        <div id="content" class="row">
        <div id="body" class="span8">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		   <div class="apost">
			<h1><?php the_title(); ?> </h1>
			<h5><small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small></h5>
			<p><?php the_content(); ?></p>
                   </div>
		<?php endwhile; ?>
		<?php endif; ?>
		<a href="http://www.sndlou.com/news/"><< Back to News</a><br>
		<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>
        </div>
        
        <?php get_sidebar(); ?>
        
        </div>
        
        <div id="under" class="row">
        	<div id="theribbon" class="span12 hidden-phone hidden-tablet">
			<div class="ribbon"><p><b>IT’S THE TRUTH #26:</b> Louisville is the largest disco ball manufacturer in the United States. We know how to get down and boogie.<p></div>
            </div>
		</div>
       
	   
<?php get_footer(); ?>