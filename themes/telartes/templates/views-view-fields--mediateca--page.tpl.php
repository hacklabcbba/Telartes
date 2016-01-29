<?php if(isset($fields['field_photography_photo'])) : ?>
        <div class="mrc-list-mediateca img-list-mediateca photo-img-list">
<?php elseif (isset($fields['field_multimedia_link']))  : ?>
        <div class="mrc-list-mediateca img-list-mediateca video-img-list">
<?php elseif (isset($fields['field_audio_link']))  : ?>
        <div class="mrc-list-mediateca audio-img-list">
<?php elseif (isset($fields['field_audio_upload']))  : ?>
        <div class="mrc-list-mediateca audio-img-list">
<?php else: ?>
        <div class="mrc-list-mediateca">
<?php endif; ?>
    <?php if(isset($fields['field_photography_photo'])) : ?>
    <?php print $fields['field_photography_photo']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_audio_link'])) : ?>
    <div class="audio-list_file">
    <?php print $fields['field_audio_link']->content; ?>
    </div>
    <?php endif; ?>
    <?php if(isset($fields['field_multimedia_link'])) : ?>
    <?php print $fields['field_multimedia_link']->content; ?>
    <?php endif; ?>
    <?php if(isset($fields['field_audio_upload'])) : ?>
    <div class="audio-list_file">
    <?php print $fields['field_audio_upload']->content; ?>
    </div>
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
