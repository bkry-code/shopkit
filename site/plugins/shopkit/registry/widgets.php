<?php

// Register widgets
$kirby->set('widget', 'shopkit-version', __DIR__.DS.'..'.DS.'widgets'.DS.'shopkit-version');
$kirby->set('widget', 'admin-links', __DIR__.DS.'..'.DS.'widgets'.DS.'admin-links');
$kirby->set('option', 'panel.widgets', [
  'pages'    => true,
  'admin-links' => true,
  'shopkit-version' => true,
  'site'     => false,
  'history'  => false,
  'account'  => false,
]);