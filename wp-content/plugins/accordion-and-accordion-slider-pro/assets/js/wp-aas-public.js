jQuery(document).ready(function($){    
	
	$( '.wpos-tab-slider' ).each(function( index ) {		
		var slider_id   = $(this).attr('id');
		var slider_conf = $.parseJSON( $(this).closest('.wpaas-accordion-wrap').find('.wpaas-conf').text());
		
		if( typeof(slider_id) != 'undefined' && slider_id != '' ) {	
	
			jQuery('#'+slider_id).wpostabSlider({
				width				: parseInt(slider_conf.width),
		        height 				: parseInt(slider_conf.height),
				responsiveMode		: 'custom',
		        orientation 		: slider_conf.orientation,
				openPanelOn 		: slider_conf.open_panel_on,				
		        visiblePanels 		: parseInt(slider_conf.visible_panels),
		        visiblePanels_960	: parseInt(slider_conf.visible_panels_960),
		        visiblePanels_800	: parseInt(slider_conf.visible_panels_800),
		        visiblePanels_650	: parseInt(slider_conf.visible_panels_650),
		        visiblePanels_500	: parseInt(slider_conf.visible_panels_500),
		        panelDistance 		: parseInt(slider_conf.panel_distance),
				maxOpenedPanelSize	: slider_conf.max_openedaccordion_size,				
				openPanelDuration	: 400,
				closePanelDuration	: 400,
				pageScrollDuration	: 300,
		        mouseWheel 			: (slider_conf.mouse_wheel) == "true" 			? true 			: false,		       
				autoplay 			: (slider_conf.autoplay) 	== "true" 			? true 			: false,	
				shadow				: (slider_conf.shadow) 		== "true" 			? true 			: false,				
				breakpoints: {
					960: {visiblePanels: parseInt(slider_conf.visible_panels_960)},
					800: {visiblePanels: parseInt(slider_conf.visible_panels_800)},
					650: {visiblePanels: parseInt(slider_conf.visible_panels_650)},
					500: {visiblePanels: parseInt(slider_conf.visible_panels_500)}
				}
	    	});
		}
	});
});