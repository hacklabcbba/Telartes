<div class="box-list">
    <div class="float-left photos">
        <?php print $fields['field_personal_picture']->content; ?>
    </div>
    <div class="float-left info">
        <div class="name">
            <h3><?php print $fields['title']->content; ?></h3>
            <div class="names">
                <?php print $fields['field_personal_name']->content; ?>
                <?php print $fields['field_personal_lastname']->content; ?>
            </div>
        </div>
        <div class="infos">
            <?php print $fields['field_personal_f_of_interest']->content; ?>
            <?php print $fields['field_personal_f_of_area']->content; ?>
        </div>
    </div>
</div>
