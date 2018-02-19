<?php

//Excluding css files

function mytheme_css_alter(&$css) {
  // Remove Drupal core CSS.
  unset($css[drupal_get_path('module', 'node') . '/node.css']);
}
