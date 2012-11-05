<?php
/**
 * @file
 * Template for Panopoly Geary.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display geary clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="geary-container geary-header clearfix row">
    <div class="span12 panel-panel">
      <div class="geary-container-inner geary-header-inner panel-panel-inner">
        <?php print $content['header']; ?>
      </div>
    </div>
  </div>
  
  <div class="geary-container geary-column-content clearfix row">
    <div class="span4 sidebar panel-panel">
      <div class="geary-column-content-region-inner geary-column1-inner panel-panel-inner">
        <?php print $content['column1']; ?>
      </div>
    </div>
    <div class="span4 content panel-panel">
      <div class="geary-column-content-region-inner geary-content-inner panel-panel-inner">
        <?php print $content['column2']; ?>
      </div>
    </div>
    <div class="span4 sidebar panel-panel">
      <div class="geary-column-content-region-inner geary-column2-inner panel-panel-inner">
        <?php print $content['column3']; ?>
      </div>
    </div>
  </div>
  
</div><!-- /.geary -->
