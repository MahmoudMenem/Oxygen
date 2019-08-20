<?php /* Template Name: services */ get_header( );?>

<?php $head = get_field('first_section'); ?>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(<?php echo $head['image']['url']; ?>);">

		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><?php echo $head['header']; ?></h1>
							<h2><?php echo $head['comment' ]; ?> <a href="<?php echo $head['link']; ?>" target="_blank"><?php echo $head['link_text']; ?></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	

	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				
				<?php $query = new WP_Query( array( 'post_type' => 'service' , 'orderby' => 'post_id' , 'order' => 'ASC') ); ?>
				<?php 
					while ( $query->have_posts() ) : $query->the_post();
				?>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="feature-center">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3><?php the_field('title'); ?></h3>
						<p><?php the_field('comment'); ?></p>
						<p><a href="<?php the_field('link'); ?>" class="btn btn-primary"><?php the_field('link_text'); ?></a></p>
					</div>
				</div>
					<?php endwhile; wp_reset_query(); ?>
				
			</div><!--end row-->
		</div>
	</div>




<?php $third = get_field('third_section'); ?>

	<div class="gtco-cover gtco-cover-sm" style="background-image:url(<?php echo $third['image']['url'] ?>);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><?php echo $third['header'];?></h1>
							<h2><?php echo $third['comment']; ?> <a href="<?php echo $third['link']; ?>" target="_blank"><?php echo $third['link_text'];?></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $first = get_field('forth_section'); ?>

	<div id="gtco-features-2">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2><?php echo $first['header']; ?></h2>
					<p><?php echo $first['comment']; ?></p>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">

					<?php $query2 = new WP_Query(array('post_type' => 'choose' , 'orderby' => 'post_id' , 'order' => 'ASC')); ?>
					<?php while($query2 -> have_posts(  )) : $query2 -> the_post(); ?>
						<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
							<span class="icon">
								<i class="icon-check"></i>
							</span>
							<div class="feature-copy">
								<h3><?php the_field('title'); ?></h3>
								<p><?php the_field('comment'); ?></p>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>	

				</div>

				<div class="col-md-6">
					<div class="gtco-video gtco-bg" style="background-image: url(<?php echo $first['image']['url']; ?>);">
						<a href="<?php echo $first['vedio']; ?>" class="popup-vimeo"><i class="icon-video2"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

    <?php get_footer(); ?>