<?php
class TestDao extends AbstractDao {
	private $modelName = "TestModel";
	public function select(){
		return parent::transaction("SELECT * FROM Test",  $this->modelName);
		/*$stmt = null;
		try{
			//$stmt = parent::getStmt ( "SELECT IDX, DATA FROM Test" );
			//$stmt->execute ();
			//$stmt->bind_result ( $idx, $data );
			$rs = mysqli_query(parent::get(),"SELECT IDX, DATA FROM Test");
			$rslt = array();
			//while ($stmt->fetch ()) {
			while($rst = mysqli_fetch_array($rs)){
				var_dump($rst);
				$model = new TestModel();
				$model->setIdx($rst["IDX"]);
				$model->setData($rst["DATA"]);
				array_push($rslt,$model);
			} 
			return $rslt;
			
		}catch ( Exception $e ) {
			die ( $e );
		} finally {
			//$stmt->close ();
			//parent::close ();
			mysqli_close(parent::get());
		}*/
	}
}
?>