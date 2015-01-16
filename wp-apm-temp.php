<?php 
class Tribe_Status_Type {

    protected $key = 'tribe_post_status';
    protected $type = 'post_status';

    public function __construct() {
        $type = $this->type;

        add_filter('tribe_custom_column'.$type, array($this, 'column_value'), 10, 3 );
        add_filter('tribe_custom_row'.$type, array($this, 'form_row'), 10, 4 );
        add_filter('tribe_maybe_active'.$type, array($this, 'maybe_set_active'), 10, 3 );
        add_action('tribe_after_parse_query', array($this, 'parse_query'), 10, 2 );
        add_action('tribe_orderby_custom'.$type, array($this, 'orderby'), 10, 2 );
    }

    public function orderby($wp_query, $filter) {
        add_filter( 'posts_orderby', array($this, 'set_orderby'), 10, 2 );
    }

    public function set_orderby($orderby, $wp_query) {
        // run once
        remove_filter( 'posts_orderby', array($this, 'set_orderby'), 10, 2 );
        global $wpdb;
        list($by, $order) = explode(' ', trim($orderby) );
        $by = "{$wpdb->posts}.post_status";
        return $by . ' ' . $order;
    }

    public function parse_query($wp_query, $active) {
        if ( ! isset($active[$this->key]) ) {
            return;
        }
        $status = $active[$this->key]['value'];
        $wp_query->set('post_status', $status);
    }

    public function maybe_set_active($return, $key, $filter) {
        if ( isset($_POST[$key]) && ! empty($_POST[$key]) ) {
            return array('value' => $_POST[$key]);
        }
        return $return;
    }

    public function form_row($return, $key, $value, $filter) {
        $stati = get_post_stati(array('show_in_admin_status_list'=>true), 'objects');
        $args = array();
        foreach ( $stati as $k => $object ) {
            $args[$k] = $object->label;
        }
        return tribe_select_field($key, $args, $value['value'], true);
    }

    public function column_value($value, $column_id, $post_id) {
        $status = get_post_status($post_id);
        $status_object = get_post_status_object($status);
        return ( isset($status_object->label) ) ? $status_object->label : $status;
    }

}
new Tribe_Status_Type;
?>
