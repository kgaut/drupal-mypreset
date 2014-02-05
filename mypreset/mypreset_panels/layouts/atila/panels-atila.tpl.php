<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a three column 25%-50%-25% panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['middle']: Content in the middle column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<div class="panel-display atila  clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="atila-wrapper">
    <div class="panel-panel panel-col-first double">
      <div class="inside"><?php print $content['67-left']; ?></div>
    </div>

    <div class="panel-panel panel-col-last">
      <div class="inside"><?php print $content['33-right']; ?></div>
    </div>
  </div>
  <?php if ($content['100-middle']): ?>
    <div class="atila-wrapper">
      <div class="panel-panel panel-col-middle full-width">
        <div class="inside"><?php print $content['100-middle']; ?></div>
      </div>
    </div>
  <?php endif;?>
  <div class="atila-wrapper">
    <div class="panel-panel panel-col-first">
      <div class="inside"><?php print $content['left']; ?></div>
    </div>

    <div class="panel-panel panel-col">
      <div class="inside"><?php print $content['middle']; ?></div>
    </div>

    <div class="panel-panel panel-col-last">
      <div class="inside"><?php print $content['right']; ?></div>
    </div>
  </div>

  <?php if ($content['bottom']): ?>
  <div class="atila-wrapper">
    <div class="panel-panel panel-col-bottom full-width">
      <div class="inside"><?php print $content['bottom']; ?></div>
    </div>
  </div>
  <?php endif ?>
</div>
