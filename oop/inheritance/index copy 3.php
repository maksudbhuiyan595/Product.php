<?php

interface Bkash{
    public function payment();
    public function order();
} 

abstract class Father{
  abstract  public function Profile();
  public function Follower(){
    echo "my follower is 100";
  }
}

class Son extends Father{
    public function Profile(){
        echo $name= "Father profile";
    }
}



?>