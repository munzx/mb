<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* The marketing brief check
*/
class manage extends CI_Controller
{

	//Check the marketing breif form fields and respond
	public function mbcheck()
	{	
		$this->_IsSessionStarted();
		$_SESSION['user'] = 'user';

		//Get the "mb" form data
		$formData = json_decode( trim(file_get_contents('php://input')) );

		//The form controller "Just for testing"
		$formCheck = true;

		//Load the form elements
		$_SESSION['mb'] = $formData;

		$this->_ResponseStatus($formCheck);
	}


	//Check the products and respond
	public function productscheck()
	{
		//Did the user come from the "mb" home page
		$this->_Access();

		//Get the products data
		$jsonData = json_decode( trim( file_get_contents( 'php://input' )) );

		//Just for testing
		$productsFormCheck = true;

		//Store data in a session
		$this->_IsSessionStarted();

		$_SESSION['productsList'] = $jsonData;


		//Get the user email
		$userEmail = $_SESSION['mb']->email;

		//The message to be sent to the admin
		$adminMessage = $this->_MessageEditor($_SESSION['mb']);

		//Send email to the user
		$this->_CustomerEmail($userEmail);

		//Send email to the admin
		$this->_AdminEmail($adminMessage);		

		//The response
		$this->_ResponseStatus($productsFormCheck);
	}


	public function done()
	{
		//Did the user come from the "mb" home page
		$this->_Access();

		//Just for testing
		$doneCheck = true;

		//The response
		$this->_ResponseStatus($doneCheck);
		session_destroy();

	}


	//Header response
	private function _ResponseStatus($value)
	{
		//If $value param is true then response with the 200 ok otherwise give the error message
		if( $value )
		{
			header('HTTP/1.1 200 OK');
			exit();
		} 
			else 
		{
			header('HTTP/1.1 404 error');
			exit();
		}

	}

	private function _Access()
	{
		$this->_IsSessionStarted();

		//Here we will check if the user is going by the supposed order Insha'a Allah
		if( !isset($_SESSION['user'])){
			$this->_ResponseStatus(false);
		}
		return true;
	}

	private function _IsSessionStarted()
	{
		if(!session_id())
		{
			session_start();
		}

		return true;
	}

	private function _MessageEditor($json)
	{
		$view = "
			Name : ".$json->firstName.",
			Last name : ".$json->lastName.",
			Email : ".$json->email.",
			Brand : ".$json->Brand.",
		";

		return $view;
	}

	//The email to be sent to the user upon successful application
	private function _CustomerEmail($userEmail)
	{

		$this->load->library('email');
		$this->email->from('info@moheera.com');
		$this->email->to($userEmail);
		$this->email->bcc('munzir.suliman@moheera.com');

		$this->email->subject('Moheera subscritption application!');
		$this->email->message('Thank you , You are awesome and so we will contact you shortly Insha Allah');

		$this->email->send();
		echo 'the email debugger'.$this->email->print_debugger();
	}

	//The email to be sent to the user upon successful application
	private function _AdminEmail($msg)
	{
		$this->load->library('email');
		$this->email->from('info@moheera.com');
		$this->email->to('dr.makki.salah@moheera.com');
		$this->email->bcc('munzir.suliman@moheera.com');

		$this->email->subject('Subscritption application!');
		$this->email->message($msg);

		$this->email->send();
		echo 'the email debugger'.$this->email->print_debugger();
	}






}
















