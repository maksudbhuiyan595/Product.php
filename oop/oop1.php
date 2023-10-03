<?Php 

interface Profile{
    public function userName();
    // public function Email();
}
class User implements Profile{
    public function userName(){
        return "this is interface method";
    }
}
class A implements Profile{
    public function userName(){
        return "this is interface method";
    }
}


?>