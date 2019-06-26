<?php
	include_once $_SERVER ["DOCUMENT_ROOT"] . "/lib/Log4php/Logger.php";
	spl_autoload_register(function($class) {
		try{
			if(trim($class) === "mysqli"){
				return;
			} else if (trim($class) === "Smarty"){
				include_once $_SERVER ["DOCUMENT_ROOT"] . "/lib/Smarty/libs/Smarty.class.php";
				return;
			} else if(strpos($class, "Smarty") !== false) {
				return;
			}
			$filename = $class . ".mvc.class.php";
			static $includelist;
			if($includelist === NULL){
				$includelist = getFileList($_SERVER ["DOCUMENT_ROOT"]);
			}
			foreach($includelist as $key => $value){
				if(strpos($value, $filename) !== false){
					include_once $value;
				}
			}
		} catch ( Exception $e ) {
			$logger->error($e);
			redirect("/Error/SystemError");
		}
	});
	function getFileList($root){
		$list = array();
		$files = scandir($root);
		foreach ($files as $key => $value) {
			if($value === "." || $value === ".." ){
				continue;
			}
			$file = $root."/".$value;
			if(is_dir($file)){
				$list = array_merge($list,getFileList($file));
			} else {
				if(strpos($file,".mvc.class.php") !== false){
					array_push($list, $file);
				}
			}
		}
		return $list;
	}
	
	function redirect($url)
	{
	   header("Location: " . $url);
	   die();
	}
	try{
		Logger::configure ( $_SERVER ['DOCUMENT_ROOT'] . '/Property/config.xml' );
		$logger = Logger::getLogger("Index.php");
		/*
		$logger->trace("My first message.");   // Not logged because TRACE < WARN
		$logger->debug("My second message.");  // Not logged because DEBUG < WARN
		$logger->info("My third message.");    // Not logged because INFO < WARN
		$logger->warn("My fourth message.");   // Logged because WARN >= WARN
		$logger->error("My fifth message.");   // Logged because ERROR >= WARN
		$logger->fatal("My sixth message.");   // Logged because FATAL >= WARN
		*/
		$router = explode ("/",$_GET["htaccess"]);
		$logger->info($_GET["htaccess"]);
		$controller = "";
		$action = "";
		if(count($router) < 2){
			$action = "Index";
		} else {
			$action = $router[1];
			unset($router[1]);
		}
		if(count($router) < 1 || trim($router[0]) === ""){
			$controller = "Home";
		} else {
			$controller = $router[0];
			unset($router[0]);
		}
		$param = array();
		foreach ($router as $key => $value) {
			$param[] = $value;
		}
		foreach ($_GET as $key => $value) {
			if($key === "htaccess"){
				continue;
			}
			$param[$key] = $value;
		}
		foreach ($_POST as $key => $value) {
			if($key === "htaccess"){
				continue;
			}
			$param[$key] = $value;
		}
		$modelmap = new ModelMap($_GET["htaccess"], $controller, $action, $param);
		$r = new ReflectionClass($controller.'Controller'); 
		$m = $r->getMethod($action);
		$page = $m->invoke($r->newInstance(),$modelmap);
		if($page === NULL) {
			$page = $controller . "/" . $action . ".tpl";
		} else {
			$pagePath = explode ("/",$page);
			if(count($pagePath) < 2){
				$page = $controller . "/";
				if($pagePath[0] === null || trim($pagePath[0]) === "") {
					$page .= $action . ".tpl";
				} else {
					$page .= $pagePath[0] . ".tpl";
				}
			} else {
				$page .= ".tpl";
			}
		}
		//https://nsws.tistory.com/7
		//https://www.smarty.net/
		$smarty = new Smarty();
		$smarty->template_dir = $_SERVER ["DOCUMENT_ROOT"] .'/View';
		$smarty->compile_dir = $_SERVER ["DOCUMENT_ROOT"] . 'lib/Smarty/templates_c';
		$smarty->cache_dir = $_SERVER ["DOCUMENT_ROOT"] . 'lib/Smarty/cache';
		$smarty->config_dir = $_SERVER ["DOCUMENT_ROOT"] . 'lib/Smarty/configs';
		foreach ($modelmap->getDataList() as $key => $value) {
			$smarty->assign($key, $value);
		}
		$smarty->display($page);
	} catch ( Exception $e ) {
		$logger->error($e);
		redirect("/Error/NotPage");
	}
?>