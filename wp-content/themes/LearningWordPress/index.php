
		<?php 

			get_header();
		?>

	<?php
			if(have_posts()):
				while(have_posts()): the_post(); 
			 ?>

		 <article class="post">
				<a href="<?php the_permalink()?>">
				 <?php the_title(); ?>
				 </a>

				 <p class="post-info"><?php 		// the_time('m/d/y'); 
				 the_time('F jS, Y g:i:a'); 	 ?>
                 <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">| by  <?php the_author(); ?></a>
                  <?php 

				   $categories = get_the_category();
				   $separator = ", ";
				   $output = '';
				   $addendum = 'Posted in ';

				   if($categories){
				   	foreach ($categories as $category) {
				   		$output .= $addendum. '<a href="'. get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $seperator;
				   	}
				   	echo trim($output, $seperator);
				   }

			    ?>
				 </p>
			   <p><?php the_content(); ?>
			  
			     </p>

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