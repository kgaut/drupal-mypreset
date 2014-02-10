# drupal-mypreset #



## My Preset ##

Generic drupal module for useful implemented hooks

List of used hooks :
  * HOOK_preprocess_node: Add a template suggestion for node with this pattern : node--CONTENT_TYPE--VIEW_MODE.tpl.php
  * HOOK_preprocess_field : Field Api > when asigning no text format to a textarea, there's a drupal bug witch prevent line break so in this hook we add a nl2br

## My Preset Panels ##

Provide skeleton to create new layout for Panels and comes with several layouts

List of templates :
  * ![Layout "Atila"](mypreset/mypreset_panels/layouts/atila/atila.png "Atila") Atila