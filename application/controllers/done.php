<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Done
*/
class done extends CI_Controller
{
	
	function index()
	{
		session_start();

		$data['session'] = $_SESSION['user'];

		if(!isset($_SESSION['user']))
		{
			$data['message'] = 'Kindly , Click on the home link to fill up the form';
			$data['heart'] = '';
		} 
			else 
		{
			$data['message'] = '<h2>Thank you , You are awesome!</h2><p>We will contact you shortly</p>';
			$data['heart'] = '<img src="public/img/heart.png" />';

			$data['productsList'] = $_SESSION['productsList'];
			$data['mb'] = $_SESSION['mb'];
		}


		$this->load->view('done',$data);
	}
}