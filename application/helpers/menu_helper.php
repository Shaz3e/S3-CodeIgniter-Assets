<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Active Menu Class
 * 
 * Create an active url based on your controller.
 *
 * @access  public
 * @param   string
 * @return  string
 */
if(!function_exists('active_link')) {
    function activate_menu($controller) {
        
        // Getting CI class instance.
        $CI = get_instance();
        
        // Getting router class to active.
        $class = $CI->router->fetch_class();
        
        // return active class
        return ($class == $controller) ? 'active' : '';
    }
}
/* End of file url_helper.php */
/* Location: ./application/helpers/url_helper.php */