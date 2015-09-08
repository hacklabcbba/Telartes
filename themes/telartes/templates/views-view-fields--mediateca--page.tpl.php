<div class="mrc-list-mediateca">
    <?php if(isset($fields['field_photography_photo'])) : ?>
    <?php print $fields['field_photography_photo']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_audio_link'])) : ?>
    <?php print $fields['field_audio_link']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_multimedia_link'])) : ?>
    <?php print $fields['field_multimedia_link']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_audio'])) : ?>
    <?php print $fields['field_audio']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_document_file'])) : ?>
    <?php print $fields['field_document_file']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['title'])) : ?>
    <?php print $fields['title']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['body'])) : ?>
    <?php print $fields['body']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_document_date'])) : ?>
    <?php print $fields['field_document_date']->content; ?>
    <?php endif; ?>
</div>