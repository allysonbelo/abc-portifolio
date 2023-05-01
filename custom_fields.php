<?php
function add_custom_meta_box() {
    $custom_meta_boxes = array(
        array(
            'id' => 'repositorio_git',
            'title' => 'Link Repositório GitHub',
            'callback' => 'show_custom_meta_box',
            'label' => 'Insira o link do repositório GitHub'
        ),
        array(
            'id' => 'live_preview',
            'title' => 'Link Live Preview',
            'callback' => 'show_custom_meta_box',
            'label' => 'Insira o link da demonstração ao vivo'
        )
    );
    foreach ($custom_meta_boxes as $meta_box) {
        add_meta_box(
            $meta_box['id'],
            $meta_box['title'],
            $meta_box['callback'],
            'post',
            'normal',
            'high',
            array('label' => $meta_box['label'])
        );
    }
}
add_action('add_meta_boxes', 'add_custom_meta_box');

function show_custom_meta_box($post, $metabox) {
    $meta = get_post_meta($post->ID, $metabox['id'], true);
    wp_nonce_field(basename(__FILE__), "{$metabox['id']}_meta_box_nonce");
?>
    <label for="<?php echo esc_attr($metabox['id']); ?>">
        <?php echo esc_html($metabox['id']); ?>:
    </label>
    <input type="text" name="<?php echo esc_attr($metabox['id']); ?>" id="<?php echo esc_attr($metabox['id']); ?>" value="<?php echo esc_attr($meta); ?>" />
<?php
}

function save_custom_meta_box($post_id)
{
    $custom_meta_boxes = array('repositorio_git', 'live_preview');
    foreach ($custom_meta_boxes as $meta_box) {
        $nonce_name = "{$meta_box}_meta_box_nonce";
        if (!isset($_POST[$nonce_name]) || !wp_verify_nonce($_POST[$nonce_name], basename(__FILE__))) {
            continue;
        }
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }
        if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return;
            }
        } else {
            if (!current_user_can('edit_post', $post_id)) {
                return;
            }
        }
        $field_name = $_POST[$meta_box];
        if (!empty($field_name)) {
            update_post_meta($post_id, $meta_box, esc_url_raw($field_name));
        } else {
            delete_post_meta($post_id, $meta_box);
        }
    }
}
add_action('save_post', 'save_custom_meta_box');
