<?php 
interface LoggerInterface {
  public function log($message);
  public function error($message);
}
class FileLogger implements LoggerInterface {
  public function log($message) {
      // Implementation for log method
      echo $mes=$message;
  }

  public function error($message) {
      // Implementation for error method
     echo $error= $message;
  }
}
$object= new FileLogger();
$object->log("hi log");
$object->error('error');

?>