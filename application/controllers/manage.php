<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* The marketing brief check
*/
class manage extends CI_Controller
{

	//Check the marketing breif form fields and respond
	public function mbcheck()
	{	

		session_start();
		$_SESSION['user'] = 'user';

		//Get the "mb" form data
		$formData = trim(file_get_contents('php://input'));

		//The form controller "Just for testing"
		$formCheck = true;

		//Explode the recieved form fields by the "&" sign
		$dataArray = explode('&', $formData);


		//Seperate the above exploded form fields by the "=" sign
		for ($i=0; $i < sizeof($dataArray); $i++)
		{ 
			$AB = explode('=', $dataArray[$i]);
			$formElements[$AB[0]] = $AB[1];
		}


		//Load the form elements
		$_SESSION['mb'] = $formElements;

		$this->_ResponseStatus($formCheck);
	}


	//Check the products and respond
	public function productscheck()
	{

		//Did the user come from the "mb" home page
		$this->_Access();


		//Get the products data
		$jsonData = json_decode( trim( file_get_contents( 'php://input' ) ) );

		//Just for testing
		$productsFormCheck = true;

		//Store data in a session
		session_start();
		$_SESSION['productsList'] = $jsonData;


		//The response
		$this->_ResponseStatus($productsFormCheck);

		//echo $jsonData[1]->pName;
	}


	public function done()
	{
		//Did the user come from the "mb" home page
		$this->_Access();

		//Just for testing
		$doneCheck = true;


		//The response
		$this->_ResponseStatus($doneCheck);

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
		//Here we will check if the user is going by the supposed order Insha'a Allah
		session_start();
		if( !isset($_SESSION['user'])){
			$this->_ResponseStatus(false);
		}
	}




}