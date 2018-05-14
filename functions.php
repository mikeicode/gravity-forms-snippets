<?php 


//-----------------------------------------------------
// Fix Gravity Form Tabindex Conflicts
//-----------------------------------------------------

add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
    $starting_index = 1000; // if you need a higher tabindex, update this number
    if( $form )
        add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
    return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}

//-----------------------------------------------------
// Hide labels
//-----------------------------------------------------

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

//-----------------------------------------------------
// stop anchor jump
//-----------------------------------------------------

add_filter( 'gform_confirmation_anchor', '__return_false' );


?>