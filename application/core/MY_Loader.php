<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * custom loader
 *
 */
 
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
    
        /**
         * Variables Changed due to compatibility with CI 3.0.0
         * 
         * @var string
         * @since S3-CodeIgniter 2.2.1
         */
        $S3Header   = $this->view('templates/header', $vars, $return); // default header
        $S3Content   = $this->view($template_name, $vars, $return); // view as controller
        $S3Footer   = $this->view('templates/footer', $vars, $return); // default footer

        if ($return)
        {
            return $S3Header; // default header
            return $S3Content;  // view as controller
            return $S3Footer;  // default footer
        }
    }
}