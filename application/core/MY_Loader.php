<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * custom loader
 *
 */
 
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {

        $content  = $this->view('templates/header', $vars, $return); // header
        $content .= $this->view($template_name, $vars, $return); // view
        $content .= $this->view('templates/footer', $vars, $return); // footer

        if ($return)
        {
            return $content;
        }
    }
}