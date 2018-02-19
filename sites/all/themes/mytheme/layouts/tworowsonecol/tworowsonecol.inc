<?php

/**
 * @file
 * Implementation of hook_panels_layouts().
 */
// Plugin definition.
$plugin = array(
  'title' => t('Single column Two rows'),
  'category' => t('Columns: 1'),
  'icon' => 'tworowsonecol.png',
  'theme' => 'tworowsonecol',
  'css' => 'tworowsonecol.css',
  'regions' => array(
    'top' => t('Top row'),
    'bottom' => t('Bottom row'),
  ),
);
