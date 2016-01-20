<?php if(isset($fields['field_photography_photo'])) : ?>
        <div class="mrc-list-mediateca img-list-mediateca">
<?php elseif (isset($fields['field_multimedia_link']))  : ?>
        <div class="mrc-list-mediateca img-list-mediateca">
<?php else: ?>
        <div class="mrc-list-mediateca">
<?php endif; ?>
    <?php if(isset($fields['field_photography_photo'])) : ?>
    <?php print $fields['field_photography_photo']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_audio_link'])) : ?>
    <?php print $fields['field_audio_link']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_multimedia_link'])) : ?>
    <?php print $fields['field_multimedia_link']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_audio_upload'])) : ?>
    <?php print $fields['field_audio_upload']->content; ?>
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
