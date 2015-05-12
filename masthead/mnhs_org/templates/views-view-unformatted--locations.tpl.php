<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div style="display: none;"<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"'; }
  if (isset($view->result[$id]->nid)) { print ' id="nid-'.$view->result[$id]->nid.'"'; } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>