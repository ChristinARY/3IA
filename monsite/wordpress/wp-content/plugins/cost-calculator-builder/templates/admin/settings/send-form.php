<?php if(ccb_pro_active()) :
    do_action('render-send-form');
    ?>
<?php else:?>
    <div class="list-row">
        <?php
            echo \cBuilder\Classes\CCBTemplate::load('/admin/partials/pro-feature');
        ?>
        <div class="list-header">
            <div class="ccb-switch">
                <input type="checkbox"/>
                <label></label>
            </div>
            <h6><?php esc_html_e('Enable Contact Form', 'cost-calculator-builder') ?></h6>
        </div>
        <div>
            <div class="list-content" style="margin-top: 0">
                <select>
                    <option value="" selected><?php esc_html_e('Default', 'cost-calculator-builder') ?></option>
                </select>
            </div>

            <template>

                <div class="list-content">
                    <input type="text" placeholder="<?php esc_attr_e('- Type Email -', 'cost-calculator-builder') ?>">
                </div>

                <div class="list-content">
                    <input type="text" placeholder="<?php esc_attr_e('- Type Subject -', 'cost-calculator-builder') ?>">
                </div>

            </template>
            <template>

                <div class="list-content">
                    <textarea></textarea>
                    <p class="ccb-desc">[ccb-total-0] <?php esc_html_e('will be changed into total', 'cost-calculator-builder') ?> </p>
                </div>

            </template>

            <div class="list-content">
                <input type="text" placeholder="<?php esc_attr_e('- Type Button Text -', 'cost-calculator-builder') ?>">
            </div>

            <div class="list-header" style="margin-top: 25px">
                <div class="ccb-switch">
                    <input type="checkbox"/>
                    <label></label>
                </div>
                <h6><?php esc_html_e('Redirect to payment after submit', 'cost-calculator-builder') ?></h6>
            </div>

            <div class="list-content" style="margin-top: 0">
                <select>
                    <option value="" selected><?php esc_html_e('Default2', 'cost-calculator-builder') ?></option>
                </select>
                <p class="ccb-desc"><?php esc_html_e('Only Enabled Payment Methods will be available here. You can enable and setup Payments via Settings main menu.', 'cost-calculator-builder')?></p>
            </div>
        </div>
    </div>
<?php endif;?>