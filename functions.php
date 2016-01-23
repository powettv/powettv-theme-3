<?php
if(function_exists('register_sidebar')){
    register_sidebar(array(
	    'name'=>'sidebar1',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	    'name'=>'sidebar2',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar(array(
	    'name'=>'sidebar0',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    
    // Test new dynamic sidebar
    register_sidebar(array(
	    'name'=>'top-ad',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    // Test new dynamic sidebar
    register_sidebar(array(
	    'name'=>'top-ad_games',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    // Test new dynamic sidebar
    register_sidebar(array(
	    'name'=>'top-ad_comics',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    // Test new dynamic sidebar
    register_sidebar(array(
	    'name'=>'top-ad_tv',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    // Test new dynamic sidebar
    register_sidebar(array(
	    'name'=>'top-ad_movies',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    // Test new dynamic sidebar
    register_sidebar(array(
	    'name'=>'top-ad_toys',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

// *** User-defined functions *** //

function get_category_name_link($strName, $strDisplay=''){
    $strResult = '';
    
    if($strDisplay == ''){
      $strDisplay = $strName;
    }
    
    $strResult = 
      '<a href="'
    . get_category_link(get_cat_ID($strName))
    . '">'
    . $strDisplay
    . '</a>';
    
    return ($strResult);
}
function get_tag_slug_link($strSlug, $strDisplay=''){
    $strResult = '';

/*
    if($strDisplay == ''){
      $strDisplay = $strSlug;
    }
    
    $strResult = 
      '<a href="'
    . get_tag_link(get_term_by('slug', $strSlug, 'tag')->term_id)
    . '">'
    . $strDisplay
    . '</a>';
*/
    
    return ($strResult);
}
?>