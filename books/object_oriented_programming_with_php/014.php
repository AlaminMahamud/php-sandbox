// interface.dbdriver.php

interface DBDriver{
  public function connect();
  public function execute($sql);
}
