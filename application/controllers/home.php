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
		/**
		 * your application title
		 * @var array 
		 */
		$data['title'] = "Your Application Title";

		/**
		 * load->template('template_name',$data)
		 * 
		 * $params string
		 */
		$this->load->template('home', $data);
	}

}