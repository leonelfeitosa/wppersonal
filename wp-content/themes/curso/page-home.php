<?php get_header(); ?>
			<div class="container bordaconteiner">
				<div class="row">
				<div class="col-md-7 borda">
				<p class=".gride">	<?php masterslider(1); ?> </p>
				</div>	
				<div class="col-md-5 borda">
				<?php echo do_shortcode("[post_grid id='149']"); ?>
				</div>
				<div class="col-md-12 centro borda">
				<?php echo do_shortcode("[post_grid id='160']"); ?>
			</div>
		</div>	
		</div>		

<?php get_footer(); ?>