<?php
global $qode_options;

//init variables
$page_id 							= $wp_query->get_queried_object_id();
$content_bottom_area 				= "yes";
$content_bottom_area_sidebar 		= "";
$content_bottom_area_in_grid 		= true;
$content_bottom_background_color 	= '';
$uncovering_footer					= false;
$footer_classes_array				= array();
$footer_classes						= '';
$footer_border_columns				= 'yes';
$footer_top_border_color            = '';
$footer_top_border_in_grid          = '';
$footer_bottom_border_color         = '';
$footer_bottom_border_in_grid       = '';

if(isset($qode_options['footer_border_columns']) && $qode_options['footer_border_columns'] !== '') {
	$footer_border_columns = $qode_options['footer_border_columns'];
}

if(!empty($qode_options['footer_top_border_color'])) {
	$footer_top_border_color = 'style="height: 1px;background-color: '.$qode_options['footer_top_border_color'].';"';
}

if(isset($qode_options['footer_top_border_in_grid']) && $qode_options['footer_top_border_in_grid'] == 'yes') {
	$footer_top_border_in_grid = 'in_grid';
}

if(!empty($qode_options['footer_bottom_border_color'])) {
	$footer_bottom_border_color = 'style="height: 1px;background-color: '.$qode_options['footer_bottom_border_color'].';"';
}

if(isset($qode_options['footer_bottom_border_in_grid']) && $qode_options['footer_bottom_border_in_grid'] == 'yes') {
	$footer_bottom_border_in_grid = 'in_grid';
}

//is content bottom area enabled for current page?
if(get_post_meta($page_id, "qode_enable_content_bottom_area", true) != ""){
	$content_bottom_area = get_post_meta($page_id, "qode_enable_content_bottom_area", true);
} elseif(isset($qode_options['enable_content_bottom_area'])) {
	//content bottom area is turned on in theme options
	$content_bottom_area = $qode_options['enable_content_bottom_area'];
}

//is content bottom area enabled?
if($content_bottom_area == 'yes') {
	//is sidebar chosen for content bottom area for current page?
	if(get_post_meta($page_id, 'qode_choose_content_bottom_sidebar', true) != ""){
		$content_bottom_area_sidebar = get_post_meta($page_id, 'qode_choose_content_bottom_sidebar', true);
	} elseif(isset($qode_options['content_bottom_sidebar_custom_display'])) {
		//sidebar is chosen for content bottom area in theme options
		$content_bottom_area_sidebar = $qode_options['content_bottom_sidebar_custom_display'];
	}

	//take content bottom area in grid option for current page if set or from theme options otherwise
	if(get_post_meta($page_id, 'qode_content_bottom_sidebar_in_grid', true) != ""){
		$content_bottom_area_in_grid = get_post_meta($page_id, 'qode_content_bottom_sidebar_in_grid', true);
	} elseif(isset($qode_options['content_bottom_in_grid'])) {
		$content_bottom_area_in_grid = $qode_options['content_bottom_in_grid'];
	}

	//is background color for content bottom area set for current page
	if(get_post_meta($page_id, "qode_content_bottom_background_color", true) != ""){
		$content_bottom_background_color = get_post_meta($page_id, "qode_content_bottom_background_color", true);
	}
}
?>
<?php if($content_bottom_area == "yes") { ?>

	<div class="content_bottom" <?php if($content_bottom_background_color != ''){ echo 'style="background-color:'.$content_bottom_background_color.';"'; } ?>>
        <?php if($content_bottom_area_in_grid == 'yes'){ ?>
            <div class="container">
            <div class="container_inner clearfix">
        <?php } ?>
            <?php dynamic_sidebar($content_bottom_area_sidebar); ?>
        <?php if($content_bottom_area_in_grid == 'yes'){ ?>
            </div>
            </div>
        <?php } ?>
	</div>
<?php } ?>

<?php

//is uncovering footer option set in theme options?
if(isset($qode_options['uncovering_footer']) && $qode_options['uncovering_footer'] == "yes") {
	//add uncovering footer class to array
	$footer_classes_array[] = 'uncover';
}

if($footer_border_columns == 'yes') {
	$footer_classes_array[] = 'footer_border_columns';
}

//is some class added to footer classes array?
if(is_array($footer_classes_array) && count($footer_classes_array)) {
	//concat all classes and prefix it with class attribute
	$footer_classes = 'class="'. implode(' ', $footer_classes_array).'"';
}

?>
    </div>
</div>
<!--<footer <?php echo wp_kses($footer_classes, array('class')); ?>>
	<div class="footer_inner clearfix">
		<?php
		$footer_in_grid = true;
		if(isset($qode_options['footer_in_grid'])){
			if ($qode_options['footer_in_grid'] != "yes") {
				$footer_in_grid = false;
			}
		}
		$display_footer_top = true;
		if (isset($qode_options['show_footer_top'])) {
			if ($qode_options['show_footer_top'] == "no") $display_footer_top = false;
		}

		$footer_top_columns = 4;
		if (isset($qode_options['footer_top_columns'])) {
			$footer_top_columns = $qode_options['footer_top_columns'];
		}

		if($display_footer_top) {
			if($footer_top_border_color != ''){ ?>
				<div class="fotter_top_border_holder <?php echo esc_attr($footer_top_border_in_grid); ?>" <?php echo wp_kses($footer_top_border_color, array('style')); ?>></div>
			<?php } ?>
			<div class="footer_top_holder">
				<div class="footer_top<?php if(!$footer_in_grid) {echo " footer_top_full";} ?>">
					<?php if($footer_in_grid){ ?>
					<div class="container">
						<div class="container_inner">
							<?php } ?>
							<?php switch ($footer_top_columns) {
								case 6:
									?>
									<div class="two_columns_50_50 clearfix">
										<div class="qode_column column1">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_1' ); ?>
											</div>
										</div>
										<div class="qode_column column2">
											<div class="column_inner">
												<div class="two_columns_50_50 clearfix">
													<div class="qode_column column1">
														<div class="column_inner">
															<?php dynamic_sidebar( 'footer_column_2' ); ?>
														</div>
													</div>
													<div class="qode_column column2">
														<div class="column_inner">
															<?php dynamic_sidebar( 'footer_column_3' ); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php
									break;
								case 5:
									?>
									<div class="two_columns_50_50 clearfix">
										<div class="qode_column column1">
											<div class="column_inner">
												<div class="two_columns_50_50 clearfix">
													<div class="qode_column column1">
														<div class="column_inner">
															<?php dynamic_sidebar( 'footer_column_1' ); ?>
														</div>
													</div>
													<div class="qode_column column2">
														<div class="column_inner">
															<?php dynamic_sidebar( 'footer_column_2' ); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="qode_column column2">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_3' ); ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 4:
									?>
									<div class="four_columns clearfix">
										<div class="qode_column column1">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_1' ); ?>
											</div>
										</div>
										<div class="qode_column column2">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_2' ); ?>
											</div>
										</div>
										<div class="qode_column column3">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_3' ); ?>
											</div>
										</div>
										<div class="qode_column column4">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_4' ); ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 3:
									?>
									<div class="three_columns clearfix">
										<div class="qode_column column1">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_1' ); ?>
											</div>
										</div>
										<div class="qode_column column2">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_2' ); ?>
											</div>
										</div>
										<div class="qode_column column3">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_3' ); ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 2:
									?>
									<div class="two_columns_50_50 clearfix">
										<div class="qode_column column1">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_1' ); ?>
											</div>
										</div>
										<div class="qode_column column2">
											<div class="column_inner">
												<?php dynamic_sidebar( 'footer_column_2' ); ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 1:
									dynamic_sidebar( 'footer_column_1' );
									break;
							}
							?>
							<?php if($footer_in_grid){ ?>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		<?php } ?>
		<?php
		$display_footer_text = false;
		if (isset($qode_options['footer_text'])) {
			if ($qode_options['footer_text'] == "yes") $display_footer_text = true;
		}
		if($display_footer_text): ?>
			<div class="footer_bottom_holder">
				<?php if($footer_bottom_border_color != ''){ ?>
					<div class="fotter_top_border_holder <?php echo esc_attr($footer_bottom_border_in_grid); ?>" <?php echo wp_kses($footer_bottom_border_color, array('style')); ?>></div>
				<?php } ?>
				<div class="footer_bottom">
					<?php dynamic_sidebar( 'footer_text' ); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</footer>-->
<footer>
	<div class="fotter_top_border_holder " style="height: 1px;background-color: #d7d7d7;"></div>
	<div class="container">
		<div class="row row-footer">
			<div class="col-sm-3 col-md-3 logo text-center">
				<img src="http://www.merakistudiomadrid.com/wp-content/uploads/2017/03/MERAKI.png" alt="logo" />
			</div>
			<!-- <div class="col-sm-6 col-md-6 direccion">

			<?php 
				$link = get_field('footer_link_' . 'es', 'options');
				$direction = get_field('footer_direction_' . 'es', 'options');
			?>
				<p>
				<a href="mailto:<?php echo $link; ?>"><?php echo $link; ?><br class="visible-xs"/>
					
				</a> <?php echo $direction; ?></p>
			</div> -->
			<div class="col-sm-6 col-md-6 direccion">

			<?php 
				$link = get_field('footer_link_' . 'es', 'options');
				$direction = get_field('footer_direction_' . 'es', 'options');
			?>
				<p class="text-center">
				<a href="mailto:<?php echo $link; ?>"><?php echo $link; ?><br class="visible-xs"/>
					
				</a> <?php echo $direction; ?><br>
					<a href="http://www.merakistudiomadrid.com/politica-de-privacidad" target="_self">Política de privacidad</a> | 
					<a href="http://www.merakistudiomadrid.com/politica-de-privacidad#aviso_legal" target="_self">Aviso legal</a> | 
					<a href="http://www.merakistudiomadrid.com/politica-de-privacidad#politica_de_cambios" target="_self">Política de cambios</a>					
				</p>
			</div>
			<div class="col-sm-3 col-md-3 social">

				<?php 
					$instagram = get_field('instagram', 'options');
					$facebook = get_field('facebook', 'options');
					$twitter = get_field('twitter', 'options');

					echo do_shortcode('[social_icons type="normal_social" icon_pack="font_elegant" fa_icon="fa-adn" fe_icon="social_facebook_circle" size="large" target="_blank" link="' . $facebook .'" icon_color="#393939" icon_hover_color="#e6ae48"][social_icons type="normal_social" icon_pack="font_elegant" fa_icon="fa-adn" fe_icon="social_instagram_circle" size="large" target="_blank" link="' . $instagram .'" icon_color="#393939" icon_hover_color="#e6ae48"]') 
				?>
			</div>
		</div>
	</div>
	<style>
		#cookiebar {
		    position: fixed;
		    border-top: 1px solid #777777;
	    	bottom: 0;
		    width: 100%;
		    text-align: center;
		    background-color: #ffffff;
		    padding: 7.5px 0px;
		    z-index: 100;
		}

		.hide{
			display: none;
		}

		@media(max-width: 768px){
			#cookiebar{
			    position: fixed;
			    border-top: 1px solid #777777;
			    bottom: 0;
			    width: 100%;
			    text-align: center;
			    background-color: #ffffff;
			    padding: 7.5px 15px;
			    z-index: 100;
			    font-size: 12px;
			    text-align: center;
			}

			.hide{
				display: none;
			}
		}
	</style>

	<div id="cookiebar" class="hide">
	    <p class="cookies-text">
	    <?php 
	    	echo get_field('footer_cookies_' . $lang, 'option'); 
	    ?>
	    </p>    
	</div>

	<script>
			function initCookies()
			{
				//selectors to control
				//let cntSelector = document.querySelector('#home');
				//get the cookiebar selector
				var cookiebarSelector = jQuery('#cookiebar');

				// if(!cntSelector)
				// 	cntSelector = document.querySelector('#main');
			 
				//check if visited before
				if(!getCookie('meraki_visited'))
				{
					document.cookie = 'meraki_visited=true';

					//show the cookie bar with the overlay white
					cookiebarSelector.fadeIn();

					var timer = setTimeout(function()
					{
						//hide cookiesbar
						cookiebarSelector.fadeOut();
					}, 10000)
					
				}
			}

			function getCookie(name)
			{
				//check if has been visited before
				var found = document.cookie.indexOf(name) >= 0 ? true : false;

				//return found
				return found;
			}

			//on document ready create loader
			if(document.readyState !== 'loading' )
			    initookies();
			else
			{
				document.addEventListener('DOMContentLoaded', function()
			    {
			    	initCookies();
			    }, false);
			}
			    
	</script>

</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>