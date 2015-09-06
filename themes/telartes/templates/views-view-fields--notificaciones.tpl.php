<div class="box-list">

        <div class="float-left photos">
            <?php if(isset($fields['field_personal_picture'])):?>
                <?php print $fields['field_personal_picture']->content; ?>
            <?php endif; ?>
            <?php if(isset($fields['field_collective_picture'])):?>
                <?php print $fields['field_collective_picture']->content; ?>
            <?php endif; ?>
        </div>

    <div class="float-left info">
        <div class="name">
            <?php if(isset($fields['title'])): ?>
                <h3><?php print $fields['title']->content; ?></h3>
            <?php endif; ?>
            <div class="names">
            <?php if(isset($fields['field_personal_name'])): ?>
                <?php print $fields['field_personal_name']->content; ?>
            <?php endif; ?>
            <?php if(isset($fields['field_personal_lastname'])): ?>
                <?php print $fields['field_personal_lastname']->content; ?>
            <?php endif; ?>
            </div>
        </div>
        <div class="infos">
            <?php if(isset($fields['field_personal_f_of_interest'])): ?>
                <?php print $fields['field_personal_f_of_interest']->content; ?>
            <?php endif; ?>
            <?php if(isset($fields['field_collective_f_of_interest'])): ?>
                <?php print $fields['field_collective_f_of_interest']->content; ?>
            <?php endif; ?>
            <?php if(isset($fields['field_personal_f_of_area'])): ?>
                <?php print $fields['field_personal_f_of_area']->content; ?>
            <?php endif; ?>
            <?php if(isset($fields['field_collective_a_of_interest'])): ?>
                <?php print $fields['field_collective_a_of_interest']->content; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
