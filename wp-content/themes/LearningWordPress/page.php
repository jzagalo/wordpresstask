
<?php 

			get_header();

		?>
<article class="post page">
	<?php
			
			if(have_posts()):
				while(have_posts()): the_post(); 
			 ?>

			<?php  if(has_children() || $post->post_parent){ 
						//echo($post->post_parent);
					?>
				<nav class="site-nav children-links clearfix">				
					  <span class="parent-link">
						  <a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
						   <?php echo get_the_title(get_top_ancestor_id()); ?></a></span>				 
					  <ul>
							 <?php

							 $args  = array(
							 		'child_of' => get_top_ancestor_id(),
							 		'title_li' => ''
							 		);
							  wp_list_pages($args); ?>
					 </ul>
                 
				</nav>
		        <?php } ?>
			  <div class="column-container">
			 	  	<div class="title-column">
						<a href="<?php the_permalink()?>">
					 		<?php the_title(); ?>
					 	</a>
					 </div>
					 <div class="text-column">
				   			<p><?php the_content(); ?></p>
				   	 </div>
			   </div>
		</article>

<?php	endwhile;

		else:
			echo '<p>No content Found </p>';
	endif;
?>
	
<?php
	get_footer();

 ?>
 	</div>