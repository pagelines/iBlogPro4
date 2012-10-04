<?php

register_sidebar(array(
'name'=>'Accordion Sidebar',
'description' => __('An accordion option for the main sidebar. **Important** This UI sidebar requires that widgets have titles to work.  If a title isn\'t added your HTML markup will break',TDOMAIN), 
    'before_widget' => '<h3 id="%1$s" class="%2$s accordion_sidebar drawer-handle">',
    'after_widget' => '&nbsp;</div>',
    'before_title' => '<a href="#">',
    'after_title' => '&nbsp;</a></h3><div class="drawer-content">'
));
register_sidebar(array(
'name'=>'Drag and Drop Sidebar',
'description' => __('Another option for the main sidebar.  **Important** This UI sidebar requires that widgets have titles to work.  If a title isn\'t added your HTML markup will break.',TDOMAIN), 
    'before_widget' => '<div id="%1$s"  class="%2$s drag_drop_sidebar widget">',
    'after_widget' => '&nbsp;</div></div>',
    'before_title' => '<h3 class="drawer-handle">',
    'after_title' => '&nbsp;</h3><div class="drawer-content">'
));
register_sidebar(array(
'name'=>'Lower Sidebar',
'description' => __('If widgets are added, this sidebar shows up underneath any other "primary" sidebars.',TDOMAIN), 
    'before_widget' => '<div id="%1$s" class="%2$s widget"><div class="winner">',
    'after_widget' => '&nbsp;</div></div>',
    'before_title' => '<h3 class="wtitle">',
    'after_title' => '&nbsp;</h3>'
));
register_sidebar(array(
'name'=>'Content Sidebar',
'description' => __('These widgets appear underneath your page/post content. Select the "individual page" checkbox option for them to appear.',TDOMAIN),
    'before_widget' => '<div id="%1$s" class="%2$s widget"><div class="winner">',
    'after_widget' => '</div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

register_sidebar(array(
'name'=>'Full-Width Bottom Sidebar',
'description' => __('These widgets appear full-width underneath your page content and sidebar. Select the "individual page" option for them to appear.',TDOMAIN),
    'before_widget' => '<div id="%1$s" class="%2$s widget fix"><div class="winner">',
    'after_widget' => '</div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
'name'=>'Footer Left',
'description' => __('Left sidebar in "morefoot" element enabled in options.',TDOMAIN),
    'before_widget' => '<div id="%1$s" class="%2$s widget fix">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
'name'=>'Footer Middle',
'description' => __('Middle sidebar in "morefoot" element enabled in options.',TDOMAIN),
    'before_widget' => '<div id="%1$s" class="%2$s widget fix">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
'name'=>'Footer Right',
'description' => __('Right sidebar in "morefoot" element enabled in options.',TDOMAIN),
    'before_widget' => '<div id="%1$s" class="%2$s widget fix">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
'name'=>'Footer Columns',
'description' => __('Use this sidebar if you want to use widgets in your footer columns instead of the default.',TDOMAIN),
    'before_widget' => '<div id="%1$s" class="%2$s fcol"><div class="fcol_pad">',
    'after_widget' => '</div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));


?>