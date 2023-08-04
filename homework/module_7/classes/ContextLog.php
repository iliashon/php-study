<?php 
class ContextLog {
  private $typeLogClass = null;

  public function __construct($typeLogClass) {
    $this->typeLogClass = $typeLogClass;
  }

  public function log($text) {
    $this->typeLogClass->addErrorText($text);
  }

  public function showLog() {
    echo $this->typeLogClass->osSystem;
  }
}