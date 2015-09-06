<?php if (isset($fields['field_editorial_image'])): ?>
    <section class="image">
        <?php print $fields['field_editorial_image']->content; ?>
    </section>
<?php endif ?>
<?php if (isset($fields['title'])):?>
    <section class="title">
        <h3><?php print $fields['title']->content; ?></h3>
    </section>
<?php endif ?>
<?php if(isset($fields['body'])): ?>
    <section class="content">
        <?php print $fields['body']->content; ?>
    </section>
<?php endif ?>
<?php if(isset($fields['view_node'])):?>
    <section class="link">
        <?php print $fields['view_node']->content; ?>
    </section>
<?php endif ?>
