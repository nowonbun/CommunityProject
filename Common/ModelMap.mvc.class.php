<?php
class ModelMap{
	private $url;
	private $controller;
	private $action;
	private $param;
	private $data;
	function __construct($url, $controller, $action, $param){
		$this->url = $url;
		$this->controller = $controller;
		$this->action = $action;
		$this->param = $param;
		$this->data = array();
	}
	public function getUrl(){
		return $this->url;
	}
	public function getController(){
		return $this->controller;
	}
	public function getAction(){
		return $this->action;
	}
	public function getParam(){
		return $this->param;
	}
	public function addData($key, $data){
		$this->data[$key] = $data;
	}
	public function getData($key){
		return $this->data[$key];
	}
	public function getDataList(){
		return $this->data;
	}
}
?>