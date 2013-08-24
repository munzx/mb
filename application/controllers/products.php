<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
* Products
*/
class products extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('products');
	}



}