<?php

function foundationpress_child_sidebar_widgets() {
  register_sidebar(array(
      'id' => 'sidebar-project-widgets',
      'name' => __('Project widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));
}

add_action( 'widgets_init', 'foundationpress_child_sidebar_widgets' );

?>