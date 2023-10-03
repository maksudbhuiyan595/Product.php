<?php 
class Product {
    //Add properties
  public int $id;
  public string $name;
  public float $price;

    
    public function __construct($id, $name, $price) {
        $this->id=$id; 
       $this->name=$name;
       $this->price=$price;
    }


    // Add getFormattedPrice method
    public function getFormattedPrice(){
        return $this->price;
    }

    //Add showDetails method
    public function showDetails(){
        echo"Product Details:".PHP_EOL;
        echo"-ID: $this->id ".PHP_EOL;
        echo "-Name: $this->name ".PHP_EOL;
        echo "-Price: $". $this->getFormattedPrice();
        
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();



?>