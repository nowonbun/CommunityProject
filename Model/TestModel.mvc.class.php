<?php
class TestModel{
	private $idx;
	private $data;
	public function getIdx(){
		return $this->idx;
	}
	public function setIdx($idx){
		$this->idx = $idx;
	}
	public function getData(){
		return $this->data;
	}
	public function setData($data){
		$this->data = $data;
	}
}
?>