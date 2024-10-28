<?php

/**
 * @file
 * Deploy functions run after drush config:import.
 */

use Drupal\Core\Site\Settings;
use Drupal\node\Entity\Node;

/**
 * Initialise taxonomy terms.
 */
function brms_common_deploy_001(&$sandbox = NULL) {
  $terms = [
    [
      'name' => 'Central Forest Reserve',
      'vid' => 'forest_reserve_type',
    ],
    [
      'name' => 'Local Forest Reserve',
      'vid' => 'forest_reserve_type',
    ],
    [
      'name' => 'Private Forest',
      'vid' => 'forest_reserve_type',
    ],
    [
      'name' => 'Work required',
      'vid' => 'boundary_records_status',
    ],
    [
      'name' => 'Work in progress',
      'vid' => 'boundary_records_status',
    ],
    [
      'name' => 'Under review',
      'vid' => 'boundary_records_status',
    ],
    [
      'name' => 'Complete',
      'vid' => 'boundary_records_status',
    ],
    [
      'name' => 'Work stalled',
      'vid' => 'boundary_records_status',
    ],
    [
      'name' => 'Surveyed',
      'vid' => 'boundary_description_status',
    ],
    [
      'name' => 'Surveyed and marked',
      'vid' => 'boundary_description_status',
    ],
    [
      'name' => 'Marked but not recently checked',
      'vid' => 'boundary_description_status',
    ],
    [
      'name' => 'Urgent',
      'vid' => 'priority',
    ],
    [
      'name' => 'High',
      'vid' => 'priority',
    ],
    [
      'name' => 'Medium',
      'vid' => 'priority',
    ],
    [
      'name' => 'Low',
      'vid' => 'priority',
    ],
    [
      'name' => 'Impromptu',
      'vid' => 'priority',
    ],
  ];

  foreach ($terms as $term) {
    $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->create($term);
    $term->save();
  }
}

/**
 * Create geolayer type taxonomy terms.
 */
function brms_common_deploy_002(&$sandbox = NULL) {
  $terms = [
    [
      'name' => 'Master polygon',
      'geometry_type' => 'polygon',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#7F3C8D',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Cutline',
      'geometry_type' => 'polygon',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#FF3333',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Riverline',
      'geometry_type' => 'polygon',
      'line_style' => 'dotted',
      'line_width' => 4,
      'color' => '#3969AC',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Shoreline',
      'geometry_type' => 'polygon',
      'line_style' => 'dashed',
      'line_width' => 3,
      'color' => '#E68310',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Inter protected area line',
      'geometry_type' => 'polygon',
      'line_style' => 'solid',
      'line_width' => 4,
      'color' => '#80BA5A',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Corner pillar',
      'geometry_type' => 'point',
      'point_shape' => 'square',
      'color' => '#f97b72',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Intermediate pillar',
      'geometry_type' => 'point',
      'point_shape' => 'triangle',
      'color' => '#f97b72',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'FD numbered markstone',
      'geometry_type' => 'point',
      'point_shape' => 'circle',
      'color' => '#4b4b8f',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Cairn',
      'geometry_type' => 'point',
      'point_shape' => 'star',
      'color' => '#E73F74',
      'vid' => 'layer_type',
    ],
  ];

  foreach ($terms as $term) {
    $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->create($term);
    $term->save();
  }
}

/**
 * Create geolayer type taxonomy terms for surveys.
 */
function brms_common_deploy_003(&$sandbox = NULL) {
  $terms = [
    [
      'name' => 'Old survey',
      'geometry_type' => 'survey',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#FF3333',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Surveyed and marked',
      'geometry_type' => 'survey',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#11A579',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Surveyed',
      'geometry_type' => 'survey',
      'line_style' => 'dotted',
      'line_width' => 2,
      'color' => '#F2B701',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Marked',
      'geometry_type' => 'survey',
      'line_style' => 'dashed',
      'line_width' => 2,
      'color' => '#F8A519',
      'vid' => 'layer_type',
    ],
  ];

  foreach ($terms as $term) {
    $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->create($term);
    $term->save();
  }
}

/**
 * Create geolayer type taxonomy terms for base layers.
 */
function brms_common_deploy_004(&$sandbox = NULL) {
  $terms = [
    [
      'name' => 'UTM 50000 base layer',
      'geometry_type' => 'polygon',
      'layer_group' => 'base',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#8F818B',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'UTM 10000 base layer',
      'geometry_type' => 'polygon',
      'layer_group' => 'base',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#8F818B',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Sector boundary base layer',
      'geometry_type' => 'polygon',
      'layer_group' => 'base',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#AD9DA9',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'District 2022 base layer',
      'geometry_type' => 'polygon',
      'layer_group' => 'base',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#4b4b8f',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'District 1997 base layer',
      'geometry_type' => 'polygon',
      'layer_group' => 'base',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#f97b72',
      'vid' => 'layer_type',
    ],
  ];

  foreach ($terms as $term) {
    $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->create($term);
    $term->save();
  }
}

/**
 * Update layer group of geolayer type taxonomy terms.
 */
function brms_common_deploy_005(&$sandbox = NULL) {
  $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')
    ->loadTree('layer_type', 0, NULL, TRUE);
  foreach ($terms as $term) {
    if (empty($term->layer_group->value)) {
      if ($term->geometry_type->value == 'survey') {
        $term->layer_group->value = 'survey';
        $term->geometry_type->value = 'polygon';
      }
      else {
        $term->layer_group->value = 'feature';
      }
      $term->save();
    }
  }
}

/**
 * Create additional geolayer type taxonomy terms.
 */
function brms_common_deploy_006(&$sandbox = NULL) {
  $terms = [
    [
      'name' => 'Inter protected area riverline',
      'geometry_type' => 'polygon',
      'line_style' => 'solid',
      'line_width' => 4,
      'color' => '#f97b72',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Wetlandline',
      'geometry_type' => 'polygon',
      'line_style' => 'solid',
      'line_width' => 2,
      'color' => '#FF3333',
      'vid' => 'layer_type',
    ],
    [
      'name' => 'Internationalline',
      'geometry_type' => 'polygon',
      'line_style' => 'dotted',
      'line_width' => 4,
      'color' => '#3969AC',
      'vid' => 'layer_type',
    ],
  ];

  foreach ($terms as $term) {
    $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->create($term);
    $term->save();
  }
}

/**
 * Create geolayer type taxonomy terms for Range base layers.
 */
function brms_common_deploy_007(&$sandbox = NULL) {
  $terms = [
    [
      'name' => 'Range base layer',
      'geometry_type' => 'polygon',
      'layer_group' => 'base',
      'line_style' => 'dashed',
      'line_width' => 2,
      'color' => '#BDABB8',
      'vid' => 'layer_type',
    ],
  ];

  foreach ($terms as $term) {
    $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->create($term);
    $term->save();
  }
}

/**
 * Update associated computed fields of taxonomy terms.
 */
function brms_common_deploy_008(&$sandbox = NULL) {
  $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')
    ->loadTree('layer_type', 0, NULL, TRUE);

  $computed_fields = [
    'Cairn' => 'cairn_computed',
    'Corner pillar' => 'corner_pillar_computed',
    'FD numbered markstone' => 'fd_numbered_markstone_computed',
    'Intermediate pillar' => 'intermediate_pillar_computed',
    'Master polygon' => 'total_area_computed',
    'Riverline' => 'riverline_length_computed',
    'Shoreline' => 'shoreline_length_computed',
    'Cutline' => 'cutline_length_computed',
    'Inter protected area line' => 'interprotected_area_length_computed',
    'Inter protected area riverline' => 'interprotected_area_riverline_length_computed',
    'Wetlandline' => 'wetland_length_computed',
    'Internationalline' => 'international_length_computed',
  ];
  foreach ($terms as $term) {
    $name = $term->getName();
    if (empty($term->forest_reserve_computed_field->value)) {
      if (in_array($name, array_keys($computed_fields))) {
        $term->forest_reserve_computed_field->value = $computed_fields[$name];
        $term->save();
      }
    }
  }
}

/**
 * Update Forest Reserve Legal SI area field values.
 */
function brms_common_deploy_009(&$sandbox = NULL) {
  if (!isset($sandbox['progress'])) {
    /** @var \Drupal\Core\Entity\EntityTypeManager $entity_type_manager */
    $entity_type_manager = \Drupal::service('entity_type.manager');
    $storage = $entity_type_manager->getStorage('node');
    $sandbox['ids'] = $storage
      ->getQuery()
      ->condition('type', 'forest_reserve')
      ->accessCheck(FALSE)
      ->execute();
    $sandbox['max'] = count($sandbox['ids']);
    $sandbox['progress'] = 0;
    // Define the step size.
    $sandbox['steps'] = Settings::get('entity_update_batch_size', 25);
  }

  $ids = array_slice($sandbox['ids'], $sandbox['progress'], $sandbox['steps']);
  /** @var \Drupal\node\NodeInterface $node */
  foreach (Node::loadMultiple($ids) as $node) {
    if ($node->hasField('legal_si_area') && $node->hasField('gazetted_area_1998') && !$node->gazetted_area_1998->isEmpty()) {
      $node->legal_si_area->value = $node->gazetted_area_1998->value;
      $node->save();
    }
    $sandbox['progress']++;
  }

  $sandbox['#finished'] = empty($sandbox['max']) ? 1 : ($sandbox['progress'] / $sandbox['max']);
}

/**
 * Update new Record No field with data from obsolete Record ID field.
 */
function brms_common_deploy_010(&$sandbox = NULL) {
  if (!isset($sandbox['progress'])) {
    $entity_type_manager = \Drupal::service('entity_type.manager');
    $storage = $entity_type_manager->getStorage('node');
    $sandbox['ids'] = $storage
      ->getQuery()
      ->condition('type', ['cadastral_map', 'forest_reserve_boundary', 'district_map', 'aerial_photos'], 'IN')
      ->accessCheck(FALSE)
      ->execute();
    $sandbox['max'] = count($sandbox['ids']);
    $sandbox['progress'] = 0;
    $sandbox['steps'] = 25;
  }

  $ids = array_slice($sandbox['ids'], $sandbox['progress'], $sandbox['steps']);
  foreach (Node::loadMultiple($ids) as $node) {
    if ($node->hasField('field_record_id') && $node->hasField('field_record_no')) {
      $node->field_record_no->value = $node->field_record_id->value;
      $node->save();
    }
    $sandbox['progress']++;
  }

  $sandbox['#finished'] = empty($sandbox['max']) ? 1 : ($sandbox['progress'] / $sandbox['max']);

  \Drupal::messenger()->addMessage(t('Updated @progress of @max  nodes.',
    ['@progress' => $sandbox['progress'], '@max' => $sandbox['max']]));
}

/**
 * Update new Scale field with data from old Scale field for aerial photos.
 */
function brms_common_deploy_011(&$sandbox = NULL) {
  if (!isset($sandbox['progress'])) {
    $entity_type_manager = \Drupal::service('entity_type.manager');
    $storage = $entity_type_manager->getStorage('node');
    $sandbox['ids'] = $storage
      ->getQuery()
      ->condition('type', 'aerial_photos')
      ->accessCheck(FALSE)
      ->execute();
    $sandbox['max'] = count($sandbox['ids']);
    $sandbox['progress'] = 0;
    $sandbox['steps'] = 25;
  }

  $mapping = [
    '1:30000' => '1_30000',
    '1:60000' => '1_60000',
    '127750' => '127750',
  ];

  $ids = array_slice($sandbox['ids'], $sandbox['progress'], $sandbox['steps']);
  foreach (Node::loadMultiple($ids) as $node) {
    if ($node->hasField('field_scale') && !$node->field_scale->isEmpty() && $node->hasField('field_map_scale')) {
      $node->field_map_scale->value = $mapping[$node->field_scale->value];
      $node->save();
    }
    $sandbox['progress']++;
  }

  $sandbox['#finished'] = empty($sandbox['max']) ? 1 : ($sandbox['progress'] / $sandbox['max']);

  \Drupal::messenger()->addMessage(t('Updated @progress of @max aerial photos.',
    ['@progress' => $sandbox['progress'], '@max' => $sandbox['max']]));
}

/**
 * Update new Scale field with data from old Scale field for cadastral maps.
 */
function brms_common_deploy_012(&$sandbox = NULL) {
  if (!isset($sandbox['progress'])) {
    $entity_type_manager = \Drupal::service('entity_type.manager');
    $storage = $entity_type_manager->getStorage('node');
    $sandbox['ids'] = $storage
      ->getQuery()
      ->condition('type', 'cadastral_map')
      ->accessCheck(FALSE)
      ->execute();
    $sandbox['max'] = count($sandbox['ids']);
    $sandbox['progress'] = 0;
    $sandbox['steps'] = 25;
  }

  $ids = array_slice($sandbox['ids'], $sandbox['progress'], $sandbox['steps']);
  foreach (Node::loadMultiple($ids) as $node) {
    if ($node->hasField('field_scale') && !$node->field_scale->isEmpty() && $node->hasField('field_cad_map_scale')) {
      // Ignore invalid scales.
      if (in_array($node->field_scale->value, ['1.777777778', '0.909722222', '3.513888889'])) {
        continue;
      }
      $old_scale = str_replace([',', ' ', ':'], ['', '', '_'], $node->field_scale->value);
      if ($old_scale == '1_10001') {
        $old_scale = '1_10000';
      }
      $node->field_cad_map_scale->value = $old_scale;
      $node->save();
    }
    $sandbox['progress']++;
  }

  $sandbox['#finished'] = empty($sandbox['max']) ? 1 : ($sandbox['progress'] / $sandbox['max']);

  \Drupal::messenger()->addMessage(t('Updated @progress of @max cadastral maps.',
    ['@progress' => $sandbox['progress'], '@max' => $sandbox['max']]));
}

/**
 * Enable Generate automatic URL alias option on existing nodes.
 */
function brms_common_deploy_013(&$sandbox = NULL) {
  if (!isset($sandbox['progress'])) {
    $entity_type_manager = \Drupal::service('entity_type.manager');
    $storage = $entity_type_manager->getStorage('node');
    $sandbox['ids'] = $storage
      ->getQuery()
      ->condition('type', [
        'aerial_photos',
        'cadastral_map',
        'district_map',
        'forest_reserve_boundary',
        'map_base_layer',
      ], 'IN')
      ->accessCheck(FALSE)
      ->execute();
    $sandbox['max'] = count($sandbox['ids']);
    $sandbox['progress'] = 0;
    $sandbox['steps'] = 25;
  }

  $ids = array_slice($sandbox['ids'], $sandbox['progress'], $sandbox['steps']);
  foreach (Node::loadMultiple($ids) as $node) {
    $node->path->pathauto = 1;
    $node->save();
    $sandbox['progress']++;
  }

  $sandbox['#finished'] = empty($sandbox['max']) ? 1 : ($sandbox['progress'] / $sandbox['max']);

  \Drupal::messenger()->addMessage(t('Updated @progress of @max nodes.',
    ['@progress' => $sandbox['progress'], '@max' => $sandbox['max']]));
}

/**
 * Initialiase the Record Id field in cadastral maps.
 */
function brms_common_deploy_014(&$sandbox = NULL) {
  if (!isset($sandbox['progress'])) {
    $entity_type_manager = \Drupal::service('entity_type.manager');
    $storage = $entity_type_manager->getStorage('node');
    $sandbox['ids'] = $storage
      ->getQuery()
      ->condition('type', 'cadastral_map')
      ->accessCheck(FALSE)
      ->execute();
    $sandbox['max'] = count($sandbox['ids']);
    $sandbox['progress'] = 0;
    $sandbox['steps'] = 25;
  }

  $ids = array_slice($sandbox['ids'], $sandbox['progress'], $sandbox['steps']);
  foreach (Node::loadMultiple($ids) as $node) {
    if ($node->hasField('record_id')) {
      $node->record_id->value = $sandbox['progress'] + 1;
      $node->save();
    }
    $sandbox['progress']++;
  }

  $sandbox['#finished'] = empty($sandbox['max']) ? 1 : ($sandbox['progress'] / $sandbox['max']);

  \Drupal::messenger()->addMessage(t('Updated @progress of @max cadastral maps.',
    ['@progress' => $sandbox['progress'], '@max' => $sandbox['max']]));
}

/**
 * Update new Scale field with data from old Scale field for district maps.
 */
function brms_common_deploy_015(&$sandbox = NULL) {
  if (!isset($sandbox['progress'])) {
    $entity_type_manager = \Drupal::service('entity_type.manager');
    $storage = $entity_type_manager->getStorage('node');
    $sandbox['ids'] = $storage
      ->getQuery()
      ->condition('type', 'district_map')
      ->accessCheck(FALSE)
      ->execute();
    $sandbox['max'] = count($sandbox['ids']);
    $sandbox['progress'] = 0;
    $sandbox['steps'] = 25;
  }

  $ids = array_slice($sandbox['ids'], $sandbox['progress'], $sandbox['steps']);
  foreach (Node::loadMultiple($ids) as $node) {
    if ($node->hasField('field_scale') && !$node->field_scale->isEmpty() && $node->hasField('field_district_map_scale')) {
      $old_scale = str_replace([',', ' ', ':'], ['', '', '_'], $node->field_scale->value);
      $node->field_district_map_scale->value = $old_scale;
      $node->save();
    }
    $sandbox['progress']++;
  }

  $sandbox['#finished'] = empty($sandbox['max']) ? 1 : ($sandbox['progress'] / $sandbox['max']);

  \Drupal::messenger()->addMessage(t('Updated @progress of @max district maps.',
    ['@progress' => $sandbox['progress'], '@max' => $sandbox['max']]));
}
