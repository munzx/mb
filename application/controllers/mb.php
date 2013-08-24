<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* The marketing brief check
*/
class mb extends CI_Controller
{
	
	
	function index()
	{

		$segment = $this->uri->segment('2');

		switch ($segment) {
			case 'mbcheck':
				$this->mbFormCheck();
				break;
			case 'productscheck':
				
				break;
			default:

				break;
		}

	}


	//Check the products and respond
	private function mbProductsCheck()
	{
		//Get the products data
		$jsonData = json_decode( trim( file_get_contents( 'php://input' ) ) );

		//Just for testing
		$productsFormCheck = true;

		$this->responseStatus($productsFormCheck);

		//echo $jsonData[1]->pName;
	}


	//Check the marketing breif form fields and respond
	private function mbFormCheck()
	{
		$formData = trim(file_get_contents('php://input'));

		//The form controller "Just for testing"
		$formCheck = true;

		//Explode the recieved form fields by the "&" sign
		$dataArray = explode('&', $formData);


		//Seperate the above seperated form fields by "=" sign
		for ($i=0; $i < sizeof($dataArray); $i++)
		{ 
			$AB = explode('=', $dataArray[$i]);
			$form_elements[$AB[0]] = $AB[1];
		}

		$this->responseStatus($this->formCheck);

	}

	//Header response
	private function responseStatus($value)
	{
		//If $value param is true then response with the 200 ok otherwise give the error message
		if( $value )
		{
			header('HTTP/1.1 200 OK');
		} 
			else 
		{
			header('HTTP/1.1 500 error');
		}

	}



}