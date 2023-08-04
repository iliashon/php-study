<?php 
require 'interfaceOS.php';
class DbLog implements ICreateErrorOs {
  public $osSystem = 'Error OS: WIN';

  public function addErrorText($text) {
    $this->osSystem = $text . $this->osSystem;
  } 
}