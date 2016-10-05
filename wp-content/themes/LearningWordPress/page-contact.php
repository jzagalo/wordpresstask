
		<?php 

			get_header();
		?>

	<?php
			if(have_posts()):
				while(have_posts()): the_post(); 
			 ?>

		 <article class="post clearfix">
		 	  <div class="column-container clearfix">
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