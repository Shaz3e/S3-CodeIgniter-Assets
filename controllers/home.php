<?php if ( ! defined('BASEPATH')) 
	exit('No direct script access allowed');

/**
 * home function
 * 
 * @access public
 * @param string
 * @return string
 */

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "This is the default title";
		$this->load->template('home', $data);
	}

}