<?php /* Template Name: Home */ get_header( );?>



<?php 
	$text = get_field( "description" );
	$backimage = get_field("background");
?>
 	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(<?php echo $backimage['url']; ?>)">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><?php echo $text['header1']; ?></h1>
							<h2> <?php echo $text['text']; ?> <a href="http://gettemplates.co/" target="_blank">gettemplates.co</a></h2>
							<?php if($text['link']): ?>
							<p><a href="#" class="btn btn-default"><?php echo  $text['button_name']; ?></a></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



<?php $retina = get_field('retina_ready');
      $fullyResponsive = get_field('fully_responsive');
      $webStarter = get_field('web_starter');
?>

<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3><?php echo $retina['header']; ?></h3>
						<p><?php echo $retina['comment']; ?></p>
                        <?php if($retina['link']): ?>
						<p><a href="<?php echo $retina['link']; ?>" class="btn btn-primary"><?php echo $retina['link_text']; ?></a></p>
                        <?php endif; ?>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3><?php echo $fullyResponsive['header']; ?></h3>
						<p><?php echo $fullyResponsive['comment']; ?></p>
						<p><a href="<?php echo $fullyResponsive['link']; ?>" class="btn btn-primary"><?php echo $fullyResponsive['link_text']; ?></a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
						<h3><?php echo $webStarter['header']; ?></h3>
						<p><?php echo $webStarter['comment']; ?></p>
						<p><a href="<?php echo $webStarter['link']; ?>" class="btn btn-primary"><?php echo $webStarter['link_text']; ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $choose = get_field('choose_'); ?>

<?php $first = get_field('choose_complete') ;?>

	<div id="gtco-features-2">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2><?php echo $choose['header']; ?></h2>
					<p><?php echo $choose['comment']; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3><?php echo $first['first_part']['header']; ?></h3>
							<p><?php echo $first['first_part']['comment']; ?></p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3><?php echo $first['second_part']['header']; ?></h3>
							<p><?php echo $first['second_part']['comment']; ?></p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
                            <h3><?php echo $first['four_part']['header']; ?></h3>
							<p><?php echo $first['four_part']['comment']; ?></p>
						</div>
					</div>

				</div>

				<div class="col-md-6">
					<div class="gtco-video gtco-bg" style="background-image: url(<?php echo $first['third_part']; ?>);">
						<a href="<?php echo $first['link']; ?>" class="popup-vimeo"><i class="icon-video2"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $firstNum = get_field('counter'); ?>

	<div id="gtco-counter" class="gtco-bg gtco-counter" style="background-image:url(<?php echo $firstNum['background']['url']; ?>);">
		<div class="gtco-container">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">

						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-eye"></i>
								</span>

								<span class="counter js-counter" data-from="<?php echo $firstNum['first_number']['from']; ?>" data-to="<?php echo $firstNum['first_number']['to']; ?>" data-speed="<?php echo $firstNum['first_number']['speed']; ?>" data-refresh-interval="<?php echo $firstNum['first_number']['data_interval']; ?>"></span>
								<span class="counter-label"><?php echo $firstNum['first_number']['header']; ?></span>

							</div>
						</div>

						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-anchor"></i>
								</span>

								<span class="counter js-counter" data-from="<?php echo $firstNum['second_number']['from']; ?>" data-to="<?php echo $firstNum['second_number']['to']; ?>" data-speed="<?php echo $firstNum['second_number']['speed']; ?>" data-refresh-interval="<?php echo $firstNum['second_number']['data_interval']; ?>"></span>
								<span class="counter-label"><?php echo $firstNum['second_number']['header']; ?></span>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-briefcase"></i>
								</span>

								<span class="counter js-counter" data-from="<?php echo $firstNum['third_number']['from']; ?>" data-to="<?php echo $firstNum['third_number']['to']; ?>" data-speed="<?php echo $firstNum['third_number']['speed']; ?>" data-refresh-interval="<?php echo $firstNum['third_number']['data_interval']; ?>"></span>
								<span class="counter-label"><?php echo $firstNum['third_number']['header']; ?></span>

							</div>
						</div>

						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>

								<span class="counter js-counter" data-from="<?php echo $firstNum['forth_number']['from']; ?>" data-to="<?php echo $firstNum['forth_number']['to']; ?>" data-speed="<?php echo $firstNum['forth_number']['speed']; ?>" data-refresh-interval="<?php echo $firstNum['forth_number']['data_interval']; ?>"></span>
								<span class="counter-label"><?php echo $firstNum['forth_number']['header']; ?></span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <?php $testimonial = get_field('testimonial'); ?>

	<div id="gtco-testimonial">
		<div class="gtco-container">
			<!-- <div class="row"> -->
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2><?php echo $testimonial['header']; ?></h2>
					</div>
				</div>
				<div class="row animate-box">
					
				
					<div class="owl-carousel owl-carousel-fullwidth ">
						<div class="item">
							<div class="testimony-slide active text-center">
								<figure>
									<img src="<?php echo $testimonial['first_person']['image']['url']; ?>" alt="user">
								</figure>
								<span><?php echo $testimonial['first_person']['name']; 
                                     if($testimonial['first_person']['link']): ?>
                                    <a href="<?php echo $testimonial['first_person']['link']['url']; ?>" class="twitter"><?php echo $testimonial['first_person']['link_text']; ?>
                                    </a>
                                    <?php endif; ?>
                                </span>
								<blockquote>
									<p><?php echo $testimonial['first_person']['description']; ?></p>
								</blockquote>
							</div>
						</div>

						<div class="item">
							<div class="testimony-slide active text-center">
                                <figure>
									<img src="<?php echo $testimonial['second_person']['image']['url']; ?>" alt="user">
								</figure>
								<span><?php echo $testimonial['second_person']['name']; 
                                     if($testimonial['second_person']['link']): ?>
                                    <a href="<?php echo $testimonial['second_person']['link']['url']; ?>" class="twitter"><?php echo $testimonial['second_person']['link_text']; ?>
                                    </a>
                                    <?php endif; ?>
                                </span>
								<blockquote>
									<p><?php echo $testimonial['second_person']['description']; ?></p>
								</blockquote>
							</div>
						</div>
						<div class="item">
							<div class="testimony-slide active text-center">
                                <figure>
									<img src="<?php echo $testimonial['third_person']['image']['url']; ?>" alt="user">
								</figure>
								<span><?php echo $testimonial['third_person']['name']; 
                                     if($testimonial['third_person']['link']): ?>
                                    <a href="<?php echo $testimonial['third_person']['link']['url']; ?>" class="twitter"><?php echo $testimonial['third_person']['link_text']; ?>
                                    </a>
                                    <?php endif; ?>
                                </span>
								<blockquote>
									<p><?php echo $testimonial['third_person']['description']; ?></p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			<!-- </div> -->
		</div>
	</div>


<?php $offer = get_field('offer'); ?>
<?php $tabs = get_field('tabs'); ?>


	<div id="gtco-services">
		<div class="gtco-container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2><?php echo $offer['header']; ?></h2>
					<p><?php echo $offer['description']; ?></p>
				</div>
			</div>

			<div class="row animate-box">
				
				<div class="gtco-tabs">
					<ul class="gtco-tab-nav">
						<li class="active"><a href="#" data-tab="1">
                            <span class="icon visible-xs"><i class="icon-command"></i>
                            </span>
                            <span class="hidden-xs"><?php echo $tabs['content1']['header1'] ?></span></a>
                        </li>
						<li><a href="#" data-tab="2">
                            <span class="icon visible-xs"><i class="icon-bar-graph"></i>
                            </span>
                            <span class="hidden-xs"><?php echo $tabs['content2']['header1'] ?></span></a>
                        </li>
						<li><a href="#" data-tab="3">
                            <span class="icon visible-xs"><i class="icon-bag"></i>
                            </span>
                            <span class="hidden-xs "><?php echo $tabs['content3']['header1'] ?></span></a>
                        </li>
						<li><a href="#" data-tab="4">
                            <span class="icon visible-xs"><i class="icon-box"></i>
                            </span>
                            <span class="hidden-xs"><?php echo $tabs['content4']['header1'] ?></span></a>
                        </li>
					</ul>

					<!-- Tabs -->
					<div class="gtco-tab-content-wrap">

						<div class="gtco-tab-content tab-content active" data-tab-content="1">
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-command"></i>
								</div>
							</div>
							<div class="col-md-6">
								<h2><?php echo $tabs['content1']['header1'] ?></h2>
								<p><?php echo $tabs['content1']['description1'] ?></p>

								<div class="row">
									<div class="col-md-6">
										<h2 class="uppercase"><?php echo $tabs['content1']['header2']; ?></h2>
										<p><?php echo $tabs['content1']['description2'] ?></p>
									</div>
									<div class="col-md-6">
										<h2 class="uppercase"><?php echo $tabs['content1']['header3']; ?></h2>
										<p><?php echo $tabs['content1']['description3'] ?></p>
									</div>
								</div>

							</div>
						</div>

						<div class="gtco-tab-content tab-content" data-tab-content="2">
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-bar-graph"></i>
								</div>
							</div>
							<div class="col-md-6">
                                <h2><?php echo $tabs['content2']['header1'] ?></h2>
								<p><?php echo $tabs['content2']['description1'] ?></p>
								<div class="row">
									<div class="col-md-6">
                                        <h2 class="uppercase"><?php echo $tabs['content2']['header2']; ?></h2>
										<p><?php echo $tabs['content2']['description2'] ?></p>
									</div>
									<div class="col-md-6">
                                        <h2 class="uppercase"><?php echo $tabs['content2']['header3']; ?></h2>
										<p><?php echo $tabs['content2']['description3'] ?></p>
									</div>
								</div>

							</div>
						</div> <!--end2-->

						<div class="gtco-tab-content tab-content" data-tab-content="3">
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-bag"></i>
								</div>
							</div>
							<div class="col-md-6">
                                <h2><?php echo $tabs['content3']['header1'] ?></h2>
								<p><?php echo $tabs['content3']['description1'] ?></p>
                                <div class="row">
									<div class="col-md-6">
                                        <h2 class="uppercase"><?php echo $tabs['content3']['header2']; ?></h2>
										<p><?php echo $tabs['content3']['description2'] ?></p>
									</div>
									<div class="col-md-6">
                                        <h2 class="uppercase"><?php echo $tabs['content3']['header3']; ?></h2>
										<p><?php echo $tabs['content3']['description3'] ?></p>
									</div>
								</div>
								
							</div>
						</div><!--end3-->

						<div class="gtco-tab-content tab-content" data-tab-content="4">
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-box"></i>
								</div>
							</div>
							<div class="col-md-6">
								<h2><?php echo $tabs['content4']['header1']; ?></h2>
								<p><?php echo $tabs['content4']['description1']; ?></p>
								<div class="row">
									<div class="col-md-6">
                                        <h2 class="uppercase"><?php echo $tabs['content4']['header2']; ?></h2>
										<p><?php echo $tabs['content4']['description2'] ?></p>
									</div>
									<div class="col-md-6">
                                        <h2 class="uppercase"><?php echo $tabs['content4']['header3']; ?></h2>
										<p><?php echo $tabs['content4']['description3'] ?></p>
									</div>
								</div>
							</div>
						</div><!--end4-->

					</div>

				</div>
			</div>
		</div>
	</div>


	<?php $form = get_field('fifth_section'); ?>
	

	<div id="gtco-started">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2><?php echo $form['title']; ?></h2>
				</div>
			</div>
			<?php $query = new WP_Query( array( 'post_type' => 'login' , 'orderby' => 'post_id' , 'order' => 'ASC') ); ?>
			<?php 
					while ( $query->have_posts() ) : $query->the_post();
			?>
				<div class="row animate-box">
					<div class="col-md-12 form-group">
						<?php the_field('code'); ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

<?php get_footer(); ?>