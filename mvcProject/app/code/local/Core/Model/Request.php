<?php
/* The Core_Model_Request class is responsible for handling and parsing the request URI to determine
the module, controller, and action names for a PHP MVC application. */
class Core_Model_Request {
	protected $_moduleName;
	protected $_controllerName;
	protected $_actionName;
	public function __construct()
	{
		$request = $this->getRequestUri();
		$uri = array_filter(explode("/", $request));
		print_r($uri);
		$this->_moduleName		=isset($uri[0]) ? $uri[0] : 'page';
		$this->_controllerName	=isset($uri[1]) ? $uri[1] : 'index';
		$this->_actionName		=isset($uri[2]) ? $uri[2] : 'index';

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
		$uri = str_replace('/internship/mvcProject/','', $uri);
		$pos = strpos($uri, '?');
		if($pos === false) $pos = strlen($uri);
		$uri = substr($uri, 0, $pos);
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
		$strClass = $this->_moduleName . '_Controller_' . $this->_controllerName;
		$strClass = ucwords($strClass,"_");
		// echo $strClass;
		return $strClass; // return ucwords($this->_moduleName."_Controller_".$this->_controllerName, "_");

	}

}

