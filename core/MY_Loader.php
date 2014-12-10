<?php  if ( ! defined('BASEPATH')) 
    exit('No direct script access allowed');

/**
 * load header/footer
 *
 * @access public
 * @param string
 * @return string
 */
 
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
		// load header file from templates/header.php
        $content  = $this->view('templates/header', $vars, $return);
		// load current view 
        $content .= $this->view($template_name, $vars, $return);
		// load footer file from templates/footer
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
}