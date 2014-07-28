<?php

/*
function metroblocks_sub_preprocess_entity(&$variables) {
  foreach($variables['theme_hook_suggestions'] as &$suggestion) {
    $suggestion = 'entity__' . $suggestion;
  }
}*/

function lago_sub_js_alter(&$js) {
    unset($js['misc/tableheader.js']);
}

function lago_sub_preprocess_page(&$vars){
    
  if(isset($vars['node'])){
    $node = $vars['node'];
    $type = $node->type;
    if(isset($type)){
      $types = node_type_get_types();
      $name = $types[$type]->description; 
      $vars['subtitle'] = t($name);
    } else {
      $type = t("Todo esta aquí");
    }
  }
  
}


