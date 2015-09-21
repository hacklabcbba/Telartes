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
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="infos">
        </div>
    </div>
</div>
