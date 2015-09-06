<?php if (isset($fields['nid'])): ?>
    <section class="nid">
            <?php print $fields['nid']->content; ?>
    </section>
<?php endif; ?>

<?php if (isset($fields['field_news_image'])): ?>
    <section class="news-image">
        <?php print $fields['field_news_image']->content; ?>
    </section>
<?php endif; ?>

<?php if (isset($fields['title'])): ?>
    <section class="title">
        <?php print $fields['title']->content; ?>
    </section>
<?php endif; ?>

<?php if (isset($fields['created'])): ?>
    <section class="created">
        <?php print $fields['created']->content; ?>
    </section>
<?php endif; ?>

<?php if (isset($fields['body'])): ?>
    <section class="content">
        <?php print $fields['body']->content; ?>
    </section>
<?php endif; ?>

<?php if (isset($fields['view_node'])): ?>
    <section class="link">
        <?php print $fields['view_node']->content; ?>
    </section>
<?php endif; ?>

<?php if (isset($fields['nothing'])): ?>
    <section class="nothing">
        <?php print $fields['nothing']->content; ?>
    </section>
<?php endif; ?>
