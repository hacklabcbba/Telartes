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
<ul class="mrc-unformmatted-list">
    <?php foreach ($rows as $id => $row): ?>
        <li <?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
            <?php print $row; ?>
        </li>
    <?php endforeach; ?>
</ul>