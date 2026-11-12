<div class="misc-pub-section misc-pub-section-last ttap-container" style="border: 0"><span id="timestamp">
    
    <?php if ( isset( $ttap__event_post ) ) { wp_nonce_field( 'ttap__event_code_' . (int) $ttap__event_post, 'ttap__event_nonce', false ); } ?>

    <p class="post-attributes-label-wrapper"><label class="post-attributes-label" for="atp_custom_pixel"><?php echo  esc_html__( 'Add Event-Specific Tiktok Pixel', 'add-tiktok-advertising-pixel' ); ?></label></p>

    <label class="ttap-toggle"><input id="atp_custom_pixel" type="checkbox" name="ttap__event" value="ttap__event_yes" <?php if ( isset( $ttap__event) && !empty( $ttap__event ) ) echo 'checked="checked"'; ?> />
    <span class='ttap-toggle-slider ttap-toggle-round'></span></label>

    <p class="post-attributes-label-wrapper"><label class="post-attributes-label" for="atp_custom_pixel_code"><?php echo  esc_html__( 'Custom Code', 'add-tiktok-advertising-pixel' ) ;?></label></p>

    <textarea id="ttap__eventarea" name="ttap__eventarea" class="ttap-textarea"><?php if ( isset($ttap__eventarea) && is_string( $ttap__eventarea ) && !empty( $ttap__eventarea ) ) { echo esc_textarea( $ttap__eventarea ); } ?></textarea>

    <?php if ( isset( $ttap__event_inactive ) && is_string( $ttap__event_inactive ) && '' !== $ttap__event_inactive ) { ?>
    <p><?php echo  esc_html__( 'The code below is saved but not active: copy it into the Custom Code field and save to use it on this page.', 'add-tiktok-advertising-pixel' ); ?></p>
    <pre style="white-space: pre-wrap; word-wrap: break-word;"><?php echo esc_html( $ttap__event_inactive ); ?></pre>
    <?php } ?>

    <p><?php echo  esc_html__( 'Note: Make sure to check Add Event-Specific Tiktok Pixel and then copy-paste code in textarea. If you plan to use a Tiktok Advertising Pixel event on this page. Please read more details about Tiktok Advertising Pixel in FAQ', 'add-tiktok-advertising-pixel' ); ?></p>

</div>