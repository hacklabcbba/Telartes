<div class="mrc-block-destacados">
    <?php if (isset($fields['field_collective_picture']) || isset($fields['field_network_picture']) || isset($fields['field_photography_photo']) || isset($fields['field_image']) || isset($fields['field_call_image']) || isset($fields['field_editorial_image']) || isset($fields['field_news_image']) || isset($fields['field_event_image']) || isset($fields['field_clear_image']) || isset($fields['field_newsletter_image'])): ?>
        <div class="float-left">
            <?php print $fields['field_collective_picture']->content; ?>
            <?php print $fields['field_network_picture']->content; ?>
            <?php print $fields['field_photography_photo']->content; ?>
            <?php print $fields['field_image']->content; ?>
            <?php print $fields['field_call_image']->content; ?>
            <?php print $fields['field_editorial_image']->content; ?>
            <?php print $fields['field_news_image']->content; ?>
            <?php print $fields['field_event_image']->content; ?>
            <?php print $fields['field_clear_image']->content; ?>
            <?php print $fields['field_newsletter_image']->content; ?>
        </div>
    <?php endif; ?>
    <?php if (isset($fields['title']) || isset($fields['field_collective_review']) || isset($fields['field_network_review']) || isset($fields['body']) || isset($fields['field_event_description'])  )  : ?>
        <div class="float-right">
            <?php print $fields['title']->content; ?>
            <?php print $fields['field_collective_review']->content; ?>
            <?php print $fields['field_network_review']->content; ?>
            <?php print $fields['body']->content; ?>
            <?php print $fields['field_event_description']->content; ?>
        </div>
    <?php endif; ?>
</div>