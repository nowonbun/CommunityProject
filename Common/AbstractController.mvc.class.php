<?php
abstract class AbstractController{
	private $logger;
	function __construct(){
		$this->logger = Logger::getLogger(get_class($this));
	}
	protected function getLogger(){
		return $this->logger;
	}
}
?>