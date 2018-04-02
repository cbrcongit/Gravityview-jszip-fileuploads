<?php
/**
 * Display the fileupload field type
 *
 * @package GravityView
 * @subpackage GravityView/templates/fields
 */

$gravityview_view = GravityView_View::getInstance();

extract( $gravityview_view->getCurrentField() );

$output = '';

if( !empty( $value ) ){

	$gv_class = gv_class( $field, $gravityview_view->getForm(), $entry );

	$output_arr = gravityview_get_files_array( $value, $gv_class );

	// If the output array is just one item, let's not show a list.
	if( sizeof( $output_arr ) === 1 ) {

		$output = $output_arr[0]['content'];

	}

	// There are multiple files
	else {

		// For each file, show as a list
		foreach ( $output_arr as $key => $item) {
			// Fix empty lists
			if( empty( $item['content'] ) ) { continue; }

			 // PATHINFO_EXTENSION // PATHINFO_DIRNAME // PATHINFO_BASENAME
			$output .= '<li><label><input data-url="' . $item['file_path'] . '"  type="checkbox" style="border:5px !important" class="dl" />' . pathinfo( $item['file_path'], PATHINFO_FILENAME ) . '</label></li>';
			// $output .= '<li>' . $item['content'] . '</li>';
		}

		if( !empty( $output ) ) {

			$output = '<p><input class="all" type="checkbox"> Select All </p><form action="#" id="download_form" ><ul class="gv-field-file-uploads ' . $gv_class . '" style="list-style:none !important; margin-left: .5em !important" >' . $output . '<button type="submit" class="btn btn-primary">pack them ! </button><p><div class="progress hide" id="progress_bar"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div></p><p class="hide" id="result"></p></ul></form>';
			// $output = sprintf("<ul class='gv-field-file-uploads %s'>%s</ul>", $gv_class, $output );

		}
	}

}
add_filter( 'gform_secure_file_download_location', '__return_true' );


echo $output;
