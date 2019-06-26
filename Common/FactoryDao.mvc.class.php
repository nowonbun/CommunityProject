<?php
class FactoryDao{
	private static $daolist = array();
	public static function getTestDao(){
		if(!in_array("TestDao",FactoryDao::$daolist)){
			FactoryDao::$daolist["TestDao"] = new TestDao();
		}
		return FactoryDao::$daolist["TestDao"];
	}
}
?>