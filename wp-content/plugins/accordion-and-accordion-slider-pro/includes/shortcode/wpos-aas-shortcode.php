<?php
/**
 * 
 * @package  Accordion and Accordion Slider
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function aas_pro_slider_shortcode( $atts, $content = null) {
	
	extract(shortcode_atts(array(
		'id'				=> '',
	), $atts));
	
	// Taking some globals
	global $post;

	// Taking some variables
	$unique 		= wp_aas_pro_get_unique();
	$gallery_id 	= !empty($id) ? $id	: $post->ID;

	$prefix = WP_AAS_PRO_META_PREFIX; // Metabox prefix

	$visible_panels		= get_post_meta( $gallery_id, $prefix.'visible_panels', true );

	$visible_panels_960		= get_post_meta( $gallery_id, $prefix.'visible_panels_960', true );

	$visible_panels_800		= get_post_meta( $gallery_id, $prefix.'visible_panels_800', true );

	$visible_panels_650		= get_post_meta( $gallery_id, $prefix.'visible_panels_650', true );

	$visible_panels_500		= get_post_meta( $gallery_id, $prefix.'visible_panels_500', true );

	$visible_panels 	= (!empty($visible_panels)) ? $visible_panels : '4';

	$visible_panels_960 	= (!empty($visible_panels_960)) ? $visible_panels_960 : '4';

	$visible_panels_800 	= (!empty($visible_panels_800)) ? $visible_panels_800 : '3';

	$visible_panels_650 	= (!empty($visible_panels_650)) ? $visible_panels_650 : '3';

	$visible_panels_500 	= (!empty($visible_panels_500)) ? $visible_panels_500 : '2';
	
	$width				= get_post_meta( $gallery_id, $prefix.'width', true );
	$width				= (!empty($width)) ? $width : '900';
	
	$height				= get_post_meta( $gallery_id, $prefix.'height', true );
	$height				= (!empty($height)) ? $height : '300';
	
	$orientation		= get_post_meta( $gallery_id, $prefix.'orientation', true );
	$orientation 		= ($orientation == 'horizontal') ? 'horizontal' : 'vertical';
	
	$panel_distance		= get_post_meta( $gallery_id, $prefix.'panel_distance', true );
	$panel_distance		= (!empty($panel_distance)) ? $panel_distance : '0';
	
	$max_openedaccordion_size		= get_post_meta( $gallery_id, $prefix.'max_openedaccordion_size', true );
	$max_openedaccordion_size		= (!empty($max_openedaccordion_size)) ? $max_openedaccordion_size : '80%';
	
	$open_panel_on 		= get_post_meta( $gallery_id, $prefix.'open_panel_on', true );
	$open_panel_on 		= ($open_panel_on == 'hover') ? 'hover' : 'click';
	
	$shadow 			= get_post_meta( $gallery_id, $prefix.'shadow', true );
	$shadow 			= ($shadow == 'true') ? 'true' : 'false';
	
	$autoplay			= get_post_meta( $gallery_id, $prefix.'autoplay', true );
	$autoplay 			= ($autoplay == 'true') ? 'true' : 'false';

	$mouse_wheel		= get_post_meta( $gallery_id, $prefix.'mouse_wheel', true );
	$mouse_wheel 		= ($mouse_wheel == 'false') ? 'false' : 'true';
	
	$fancy_box			= get_post_meta( $gallery_id, $prefix.'fancy_box', true );
	$fancy_box 			= ($fancy_box == 'false') ? false : true;	

	// Slider configuration
	$slider_conf = compact('visible_panels', 'visible_panels_960', 'visible_panels_800', 'visible_panels_650', 'visible_panels_500', 'width', 'height', 'orientation','panel_distance', 'max_openedaccordion_size','open_panel_on','shadow','autoplay','mouse_wheel' );

	// Enqueue required script
	wp_enqueue_script( 'wpos-accordion-slider-js' );
	wp_enqueue_script( 'wp-aas-public-js' );	
	
	if($fancy_box) {
		wp_enqueue_style( 'wp-fancybox-public-css' );	
		wp_enqueue_script( 'wp-fancybox-public-js' );
	}

	// Getting gallery images
	$images = get_post_meta($gallery_id, $prefix.'gallery_id', true);

	ob_start();
	
	if( $images ): ?>
		
		<div class="wpaas-accordion-wrap wpaas-row-clearfix">		
			<div id="wpaas-accordion-<?php echo $unique; ?>" class="wpos-tab-slider">
				<div class="as-wposslides">								
					<?php foreach( $images as $image ): 						
						$post_mata_data 	= get_post($image);
						$image_lsider 		= wp_get_attachment_image_src( $image, 'large' );
						$image_link 		= get_post_meta($image, $prefix.'attachment_link',true);						
						$image_title 		= $post_mata_data->post_title;	
						$image_alt_text 	= get_post_meta($image,'_wp_attachment_image_alt',true);
						$image_captions 	= $post_mata_data->post_excerpt;
						 ?>						
						<div class="as-wposslide">
						<?php if(!$fancy_box) { ?>
							<?php if(!empty($image_link)) { ?>
								<a href="<?php echo $image_link; ?>" >	
									<img class="as-wposbg" src="<?php echo $image_lsider[0]; ?>" alt="<?php echo $image_alt_text; ?>" />	
								</a>	
							<?php } else { ?>
								<img class="as-wposbg" src="<?php echo $image_lsider[0]; ?>" alt="<?php echo $image_alt_text; ?>" />	
							<?php } ?>
							<?php } else { ?>
								<a href="<?php echo $image_lsider[0]; ?>" data-fancybox="gallery-3d">	<img class="as-wposbg" src="<?php echo $image_lsider[0]; ?>" alt="<?php echo $image_alt_text; ?>"  /></a>
							<?php } ?>
							<?php if(!empty($image_title)) { ?>
								<div class="as-layer as-closed as-black panel-counter" data-position="bottomLeft" data-horizontal="8" data-vertical="8"><?php echo $image_title; ?> </div>	
							<?php } ?>
							<?php if(!empty($image_title)) { ?>
							<p class="as-layer as-opened as-white as-padding" data-show-transition="right"  data-vertical="10"  data-horizontal="2%" data-hide-transition="left" data-show-delay="500"><?php echo $image_title; ?></p>
							<?php } ?>
							<?php if(!empty($image_captions)) { ?>
							<p class="as-layer as-opened as-black as-padding" data-position="bottomLeft" data-vertical="10" data-horizontal="2%" data-width="96%" data-show-transition="up" data-show-delay="400" data-hide-transition="down"><?php echo $image_captions; ?></p>
							<?php } ?>
						</div>
					<?php endforeach; ?>					
				</div>
				<div class="wpaas-conf wpaas-hide"><?php echo json_encode( $slider_conf ); ?></div><!-- end of-slider-conf -->		
			</div><!-- end .msacwl-carousel -->
		</div><!-- end .msacwl-carousel-wrap -->
	<?php endif;
	
	$content .= ob_get_clean();
	return $content;
}
add_shortcode("aas_slider", "aas_pro_slider_shortcode");