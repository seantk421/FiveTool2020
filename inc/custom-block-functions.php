<?php 


function ftGetBlockClasses() {
	$additionalClasses = '';

	$advOptionsSpacing = get_sub_field('ft_adv_spacing');
	if($advOptionsSpacing) {
        // Check for advanced spacing options 
        // and return the appropriate classes
		if($spacingTop = $advOptionsSpacing['ft_spacing_top']) {
			$additionalClasses .= ' ' . $spacingTop;
		}
		if($spacingBtm = $advOptionsSpacing['ft_spacing_bottom']) {
			$additionalClasses .= ' ' . $spacingBtm;
		}
	}

    
	$advBkgOptions = get_sub_field('ft_adv_bkg_design');
	if($advBkgOptions) {
        // Add a class if background image or color is present.
        // This will adjust the marging to padding for
        // global spacing classes
		if($advBkgOptions['ft_bkg_img'] || $advBkgOptions['ft_bkg_color']) {
			$additionalClasses .= ' ft-bkg-vis';
		}
	}

	// Check for full width component
	$advWidthFull = get_sub_field('ft_adv_width_full');
	if($advWidthFull) {
		if($advWidthFull && $advWidthFull[0] == 'yes') {
			$additionalClasses .= ' ft-width-full';
		}
	}
	
	return $additionalClasses;
}

function ftGetBlockStyles() {
    $advBlockStyles = 'style="';

    $advBkgOptions = get_sub_field('ft_adv_bkg_design');
	if($advBkgOptions) {
        // Add styling for background color
        // or background image
		if($advBkgImage = $advBkgOptions['ft_bkg_img']) {
			$advBlockStyles .= ' background-image:URL(' . $advBkgImage['url'] . ');';
		}
		if($advBkgColor = $advBkgOptions['ft_bkg_color']) {
			$advBlockStyles .= ' background-color:' . $advBkgColor . ';';
		}
    }

    $advFontSyling = get_sub_field('ft_adv_typography');
	if($advFontSyling) {
        // Add styling for font color
        // if set on the block
		if($advFontColor = $advFontSyling['ft_font_color']) {
			$advBlockStyles .= ' color:' . $advFontColor . ';';
		}
    }
    
    if($advBlockStyles == 'style="') {
        // If styles are empty, return an empty string
        return '';
    } else {
        // Else, close the style string and return
        return $advBlockStyles .= '"';
    }
}