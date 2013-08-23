<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
* Products
*/
class Products extends CI_Controller
{
	
	function index()
	{
		$this->load->view('products');
	}
}