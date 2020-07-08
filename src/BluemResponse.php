<?php 

/*
 * (c) Daan Rijpkema <info@daanrijpkema.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Bluem\BluemPHP;

/**
 * 	EMandateResponse
 */
class BluemResponse extends \SimpleXMLElement
{

	/**
	 * Return if the response is a successfull one, in boolean
	 */
	public function Status() : Bool
	{
		if(isset($this->EMandateErrorResponse)) 
		{
			return false;
		}
		return true;
	}
	
	/**
	 * Return the error message, if there is one. Else return null
	 */
	public function Error()
	{
		if(isset($this->EMandateErrorResponse))
		{

			return $this->EMandateErrorResponse->Error;
		}
		return null;
	}

}

/**
 * EMandateErrorResponse
 */
class ErrorBluemResponse
{
	private $error;

	public function __construct(String $error) {
		$this->error = $error;	
	}

	public function SetErrorMessage(String $error)
	{
	}
	public function Status() : Bool
	{
		return false;
	}
	public function Error()
	{
		return $this->error;
	}
}