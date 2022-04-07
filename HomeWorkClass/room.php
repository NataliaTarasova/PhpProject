<?php
class objectRoom
{
    public $color;
    public $count; 
    private $size;

}

class room extends objectRoom
{
   public $array = array(
        "key" => "element1",
        "key2"  => "element2",
   );

   function addition ($name){
        array_push($this->array, $name);
   }
 
   function delete ($count){
    array_shift($this->array, $count);
}

    function __construct()
    {
        $this->color="red";
        $this->size;
    }
}

class item extends room
{
    public $price;

    function __construct()
    {
        $this->color='green';
        $this->count;
    }  
}

     class table extends item
     {
        function __construct()
        {
            $this->color='blue'; 
            $this->count;
        }
     }   
    
     class computer extends item
     {
        function __construct()
        {
            $this->color='black'; 
            $this->count;
        }
     } 

     class chair extends item
     {
        function __construct()
        {
            $this->color='black'; 
            $this->count;
            $this->price='200';
        }
     }  

$newRoom = new room ();
echo '<br>Room:'.$newRoom->color;
$newRoom->size = "1";
echo ' - ' .$newRoom->size;

$newItem = new item ();
echo '<br>Item: color '.$newItem->color;
$newItem->count= "12";
echo ' - ' .$newItem->count;

$newTable = new table ();
echo '<br>Table: color '.$newTable->color;
$newTable->count= "6";
echo ' - ' .$newTable->count;

$newComputer = new computer ();
echo '<br>Computer: color '.$newComputer->color;
$newComputer->count= "6";
echo ' - ' .$newComputer->count;

$newChair = new chair ();
echo '<br>Chair: price ' .$newChair->price.' руб';

?>

