<div class="mrc-block-destacados">
    <?php if (isset($fields['field_collective_picture']) || isset($fields['field_network_picture']) || isset($fields['field_photography_photo']) || isset($fields['field_image']) || isset($fields['field_call_image']) || isset($fields['field_editorial_image']) || isset($fields['field_news_image']) || isset($fields['field_event_image']) || isset($fields['field_clear_image']) || isset($fields['field_newsletter_image'])|| isset($fields['field_imagen_por_defecto'])|| isset($fields['field_multimedia_link'])): ?>
        <div class="float-left">
            <?php if (isset($fields['field_collective_picture'])): ?>
                <div class="field_collective_picture">
                    <?php print $fields['field_collective_picture']->content; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($fields['field_network_picture'])): ?>
                <div class="field_network_picture">
                    <?php print $fields['field_network_picture']->content; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($fields['field_photography_photo'])): ?>
                <div class="field_photography_photo">
                    <?php print $fields['field_photography_photo']->content; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($fields['field_image'])): ?>
                <div class="field_image">
                    <?php print $fields['field_image']->content; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($fields['field_call_image'])): ?>
                <div class="field_call_image">
                    <?php print $fields['field_call_image']->content; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($fields['field_editorial_image'])): ?>
                <div class="field_editorial_image">
                    <?php print $fields['field_editorial_image']->content; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($fields['field_news_image'])): ?>
                <div class="field_news_image">
                    <?php print $fields['field_news_image']->content; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($fields['field_event_image'])): ?>
                <div class="field_event_image">
                    <?php print $fields['field_event_image']->content; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($fields['field_clear_image'])): ?>
                <div class="field_clear_image">
                    <?php print $fields['field_clear_image']->content; ?>
                </div>
            <?php endif; ?>
            
	    <?php if (isset($fields['field_newsletter_image'])): ?>
                <div class="field_newsletter_image">
                    <?php print $fields['field_newsletter_image']->content; ?>
                </div>
            <?php endif; ?>
            
	    <?php if (isset($fields['field_imagen_por_defecto'])): ?>
                <div class="field_imagen_por_defecto">
                    <?php print $fields['field_imagen_por_defecto']->content; ?>
                </div>
            <?php endif; ?>
	    <?php if (isset($fields['field_multimedia_link'])): ?>
                <div class="field_multimedia_link">
                    <?php print $fields['field_multimedia_link']->content; ?>
                </div>
            <?php endif; ?>

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
