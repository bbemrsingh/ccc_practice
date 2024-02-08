<?php
class Core_Model_Request {
	protected $_moduleName;
	protected $_controllerName;
	protected $_actionName;
	public function __construct(){

		$request = $this->getRequestUri();
		$uri = explode("/", $request);
		$this->_moduleName=$uri[0];
		$this->_controllerName=$uri[1];
		$this->_actionName=$uri[2];
		print_r($uri);

	}

	public function getParams($key = '') {
		return ($key == '')
			? $_REQUEST
			: (isset($_REQUEST[$key])
				? $_REQUEST[$key]
				: ''
			);
	}

	public function getPostData($key = '') {
		return ($key == '')
			? $_POST
			: (isset($_POST[$key])
				? $_POST[$key]
				: ''
			);
	}

	public function getQueryData($key = '') {
		return ($key == '')
			? $_GET
			: (isset($_GET[$key])
				? $_GET[$key]
				: ''
			);
	}

	public function isPost()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    return true;
		}
		return false;
	}


	public function getRequestUri(){
		$uri = $_SERVER['REQUEST_URI'];
		$uri = str_replace('/mvcProject/app/','', $uri);
		return $uri;
	}

	public function getActionName(){
		return $this->_actionName;
	}
	public function getModuleName(){
		return $this->_moduleName;
	}
	public function getControllerName(){
		return $this->_controllerName;
	}

	public function getFullControllerClass(){
		return ucwords($this->_moduleName."_Controller_".$this->_controllerName, "_");
	}

}

