<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
* Home
*/
class home extends CI_Controller
{
	
	function index()
	{
		$this->load->view('home');
	}
}