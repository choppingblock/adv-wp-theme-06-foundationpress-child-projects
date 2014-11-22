<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="row">
<div class="large-12 columns">
<ul class="example-orbit" data-orbit>
<li><img src="http://placehold.it/1000x400&amp;text=[%20img%201%20]"></li>
<li><img src="http://placehold.it/1000x400&amp;text=[%20img%202%20]"></li>
<li><img src="http://placehold.it/1000x400&amp;text=[%20img%203%20]"></li>
</ul>
</div>
</div>
    
    <hr/>
    </div>
  </div>
		



   <!-- this will show the 3 most recent project post types -->
   <div class="row">
   		<?php
   		$args = array( 'post_type' => 'cb_project', 'posts_per_page' => 3 );
   		$loop = new WP_Query( $args );
   		while ( $loop->have_posts() ) : $loop->the_post(); ?>
   			

   			<div class="large-4 columns">
   				<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
      			<h4><?php the_title(); ?></h4>
      			<?php the_content(); ?>
      				
      		</div>

   		<?php endwhile; ?>

   	</div>


<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>

<?php get_footer(); ?>
