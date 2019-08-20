<?php /* Template Name: register */ 
get_header( ) ?>

<?php $form1 = get_field('code'); ?>
<div id="gtco-started">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-12 form-group">
					<?php echo $form1 ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer( ) ?>