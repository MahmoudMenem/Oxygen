<?php /* Template Name: Tools */ get_header( );?>

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
	
<?php $second = get_field('second_section'); ?>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
					<h2><?php echo $second['header']; ?></h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-6">
                    <?php echo $second['left_side']; ?>
				</div>
				<div class="col-md-6">
                    <?php echo $second['right_side']; ?>
					<p><a href="<?php echo $second['link']; ?>" class="btn btn-primary"><?php echo $second['button_text']; ?></a></p>
				</div>
			</div>
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

<?php $forth = get_field('forth_section'); ?>

	<div id="gtco-team" class="gtco-section">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2><?php echo $forth['header']; ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box" data-animate-effect="fadeIn">
					<div class="gtco-staff">
						<img src="<?php echo $forth['first_person']['image']['url'] ?>" alt="Free HTML5 Templates by gettemplates.co">
						<h3><?php echo $forth['first_person']['header']; ?></h3>
						<strong class="role"><?php echo $forth['first_person']['job']; ?></strong>
						<p><?php echo $forth['first_person']['description']; ?></p>
						<ul class="gtco-social-icons">
							<li><a href="<?php echo $forth['first_person']['link1']; ?>"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php echo $forth['first_person']['link2']; ?>"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php echo $forth['first_person']['link3']; ?>"><i class="icon-dribbble"></i></a></li>
							<li><a href="<?php echo $forth['first_person']['link4']; ?>"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 animate-box" data-animate-effect="fadeIn">
					<div class="gtco-staff">
                    <img src="<?php echo $forth['second_person']['image']['url']; ?>" alt="Free HTML5 Templates by gettemplates.co">						<h3><?php echo $forth['second_person']['header']; ?></h3>
						<strong class="role"><?php echo $forth['second_person']['job']; ?></strong>
						<p><?php echo $forth['second_person']['description']; ?></p>
						<ul class="gtco-social-icons">
							<li><a href="<?php echo $forth['second_person']['link1']; ?>"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php echo $forth['second_person']['link2']; ?>"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php echo $forth['second_person']['link3']; ?>"><i class="icon-dribbble"></i></a></li>
							<li><a href="<?php echo $forth['second_person']['link4']; ?>"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 animate-box" data-animate-effect="fadeIn">
					<div class="gtco-staff">
						<img src="<?php echo $forth['third_person']['image']['url'] ?>" alt="Free HTML5 Templates by gettemplates.co">
						<h3><?php echo $forth['third_person']['header']; ?></h3>
						<strong class="role"><?php echo $forth['third_person']['job']; ?></strong>
						<p><?php echo $forth['third_person']['description']; ?></p>
						<ul class="gtco-social-icons">
							<li><a href="<?php echo $forth['third_person']['link1']; ?>"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php echo $forth['third_person']['link2']; ?>"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php echo $forth['third_person']['link3']; ?>"><i class="icon-dribbble"></i></a></li>
							<li><a href="<?php echo $forth['third_person']['link4']; ?>"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div id="gtco-started">
		<div class="gtco-container">
			
			<div class="row animate-box">
				<div class="col-md-12">
					
				</div>
			</div>
		</div>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

    <?php get_footer(); ?>