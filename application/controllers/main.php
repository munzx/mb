<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
* main
*/
class main extends CI_Controller
{
	
	function index()
	{
		$this->load->view('main');
	}
}