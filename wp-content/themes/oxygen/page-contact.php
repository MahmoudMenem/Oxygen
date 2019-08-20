<?php /* Template Name: Contact */ get_header( );?>


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
	
<?php $contact = get_field('contact_field'); ?>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<h3><?php echo $contact['left_side']['title']; ?></h3>
					<?php echo $contact['left_side']['form_code']; ?>
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3><?php echo $contact['right_side']['header']; ?></h3>
						<ul>
							<li class="address"><?php echo $contact['right_side']['address']; ?> <br> <?php echo $contact['right_side']['address_com']; ?></li>
							<li class="phone"><a href="tel://1234567920"><?php echo $contact['right_side']['number']; ?></a></li>
							<li class="email"><a href="mailto:info@yoursite.com"><?php echo $contact['right_side']['message']; ?></a></li>
							<li class="url"><a href="http://gettemplates.co"><?php echo $contact['right_side']['website']; ?></a></li>
						</ul>
					</div>

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
	


<?php get_footer(); ?>