<?php
class HomeController extends AbstractController{
	public function Index($modelmap){
		$bean = new TestBean();
		$ret = array();
		foreach (FactoryDao::getTestDao()->select()  as $key => $value) {
			array_push($ret,$value->getData());
		}
		$bean->setData($ret);
		$modelmap->addData("test",$bean);
		parent::getLogger()->info("hello");
		return "Index";
	}
}
?>