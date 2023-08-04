<?php 
require 'DB.php';
class Articles {
  private $obj = null;

  private $_db = null;

  public function __construct() {
    $this->_db = DB::getInstanse();
  }

  public function create($title, $anons, $full_text, $author) {
     try {  

      $sql = 'INSERT INTO articles(title, anons, full_text, date, author) VALUES(?, ?, ?, ?, ?)';
  
      $query = $this->_db->prepare($sql);
  
      $query->execute([$title, $anons, $full_text, time(), $author]);

     } catch (Exception $err) {
      if(strstr($_SERVER["HTTP_USER_AGENT"], "Win")) {
        $this->obj = new ContextLog(new DbLog());
      } else {
        $this->obj = new ContextLog(new FileLog());
      }

      $this->obj->log('Error');
      $this->obj->showLog();
     }
  }
}