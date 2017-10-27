<p>
    <label for="client"><?php _e( 'Client', 'metabox' ); ?></label>
    <input class="large-text" type="text" name="<?php echo $meta_box_id; ?>[client_name]" value="<?php esc_attr_e( $custom_fields['client_name'] ); ?>">
    <span class="description"><?php _e( 'Enter the client\'s name.', 'metabox' ); ?></span>
</p>

<p>
    <label for="client_url"><?php _e( 'URL', 'metabox' ); ?></label>
    <input class="large-text" type="url" name="<?php echo $meta_box_id; ?>[client_url]" value="<?php esc_url( $custom_fields['client_url'] ); ?>">
    <span class="description"><?php _e( 'Enter the client\'s url.', 'metabox' ); ?></span>
</p>
