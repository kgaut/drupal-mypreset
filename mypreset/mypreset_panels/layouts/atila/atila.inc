<?php

// Plugin definition
$plugin = array(
  'title' => t('Atila'),
  'category' => t('Columns: 3'),
  'icon' => 'atila.png',
  'theme' => 'panels_atila',
  'css' => 'atila.css',
  'regions' => array(
    '100-middle' => t('100% Middle'),
    '67-left' => t('67% Left'),
    '33-right' => t('33% Right'),
    'left' => t('Left side'),
    'middle' => t('Middle column'),
    'right' => t('Right side'),
    'bottom' => t('Bottom')
  ),
);
