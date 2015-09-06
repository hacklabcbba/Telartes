<div class="box-list">
    <div class="float-left photos">
        <?php if(isset($fields['field_collective_picture'])): ?>
            <?php print $fields['field_collective_picture']->content; ?>
        <?php endif; ?>
        <?php if(isset($fields['field_personal_picture'])): ?>
            <?php print $fields['field_personal_picture']->content; ?>
        <?php endif; ?>
        <?php if(isset($fields['field_network_picture'])): ?>
            <?php print $fields['field_network_picture']->content; ?>
        <?php endif; ?>
    </div>
    <div class="float-left info">
        <div class="name">
            <?php if(isset($fields['title'])): ?>
                <h3><?php print $fields['title']->content; ?></h3>
            <?php endif; ?>
            <?php if(isset($fields['field_personal_name']) || isset($fields['field_personal_lastname']) ): ?>
                <?php if(!empty($fields['field_personal_name']) || !empty($fields['field_personal_lastname']) ): ?>
                    <div class="names">
                        <?php print $fields['field_personal_name']->content; ?>
                        <?php print $fields['field_personal_lastname']->content; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="infos">
            <?php print $fields['type']->content; ?>
            <?php print $fields['field_collective_f_of_interest']->content; ?>
            <?php print $fields['field_collective_a_of_interest']->content; ?>
            <?php print $fields['field_personal_f_of_area']->content; ?>
            <?php print $fields['field_personal_f_of_interest']->content; ?>
            <?php print $fields['field_network_field_of_interest']->content; ?>
            <?php print $fields['field_network_areas_of_interest']->content; ?>
        </div>
    </div>
</div>
