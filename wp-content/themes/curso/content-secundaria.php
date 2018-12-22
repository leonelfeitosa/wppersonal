<article class="noticia-secundaria">
	<div class="miniatura">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?></a>	
	</div>	
	
	<a href="<?php the_permalink(); ?>"> <h2 class="titulosecundaria"><?php the_title(); ?></h2> </a>
	<p><span><?php the_category(' '); ?></span> <?php the_tags('Tags: ', ', '); ?></p>
	<a href="<?php the_permalink(); ?>"> <p><?php echo get_the_date(); ?></p> </a>
	<a href="<?php the_permalink(); ?>"> <p> <?php the_excerpt((array('class' => 'titulosecundaria'))); ?> </p></a>

</article>