<?php

abstract class AbstractDao
{

    // http://php.net/manual/kr/mysqli-stmt.bind-param.php
    // http://php.net/manual/en/mysqli.prepare.php
    // http://php.net/manual/en/pdostatement.execute.php
    // https://thereclub.tistory.com/50
    private $hostname = "localhost";

    private $username = "test";

    private $password = "a12345";

    private $dbname = "community";

    protected abstract function getClassName();

    protected function transaction($qy)
    {
        return $this->transaction($qy, $this->getClassName());
    }

    protected function transaction($qy, $clz)
    {
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        try {
            mysqli_select_db($conn, $this->dbname);
            $rslt = array();
            $rs = mysqli_query($conn, $qy);
            $rslt = array();
            $r = new ReflectionClass($clz);
            // https://m.blog.naver.com/diceworld/220295811114
            // while($rst = mysqli_fetch_array($rs)){
            while ($rst = mysqli_fetch_assoc($rs)) {
                $model = $r->newInstance();
                foreach ($rst as $key => $value) {
                    try {
                        $property = $r->getProperty(strtolower($key));
                        if ($property !== NULL) {
                            $property->setAccessible(true);
                            $property->setValue($model, $value);
                        }
                    } catch (ReflectionException $re) {
                        // Need log;
                    }
                }
                array_push($rslt, $model);
            }
            return $rslt;
        } catch (Exception $e) {
            die($e);
        } finally {
            mysqli_close($conn);
        }
    }

    public function select()
    {
        return $this->transaction("SELECT * FROM " . $this->getClassName());
    }
}
?>
