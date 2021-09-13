<?php
function isChecked( $inputName, $value ) {
	if ( isset( $_POST[ $inputName ] ) && is_array( $_POST[ $inputName ] ) && in_array( $value, $_POST[ $inputName ] ) ) {
		echo 'checked';
	}
}

function displayOption( $options, $name ) {
	foreach ( $options as $option ) {
		$option   = strtolower( $option );
		$selected = '';
		if ( isset( $name ) && $option == $name ) {
			$selected = 'selected';
		}
		printf( "<option value='%s' %s>%s</option>", $option, $selected, ucwords( $option ) );
		echo PHP_EOL;
	}
}

function multipleDisplayOption( $options, $selectedValue ) {
	foreach ( $options as $option ) {
		$option   = strtolower( $option );
		$selected = '';
		if ( isset($selectedValue) && is_array($selectedValue) && in_array( $option, $selectedValue ) ) {
			$selected = 'selected';
		}
		printf( "<option value='%s' %s>%s</option>", $option, $selected, ucwords( $option ) );
		echo PHP_EOL;
	}
}