<?php

//Excluding css files

function mytheme_css_alter(&$css) {
  // Remove Drupal core CSS.
  unset($css[drupal_get_path('module', 'node') . '/node.css']);
}

function mytheme_preprocess_node(&$vars) {
  if($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
  }
}
