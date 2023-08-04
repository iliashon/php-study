<?php 
require 'interfaceOS.php';
class FileLog implements ICreateErrorOs {
  public $osSystem = ' OS: MAC OS';

  public function addErrorText($text) {
    $this->osSystem = $text . $this->osSystem;
  } 
}