<?php
class berekening {
    private int $room;
    private float $length;
    private float $height;
    private float $depth;
    private int $volume;

    public function __construct( $room, $width, $height, $length, $volume)
    {
        $this->room = $room;
        $this->length = $length;
        $this->height = $height;
        $this->depth = $depth;
        $this->volume = $volume;
    }

    public function setVolume($volume)
    {
       $this->volume = $this->Length * $this->depth * $this->height  ;
    }

    public function getPrice()
    {
       return "De prijs is:".$price;
    }

    public function displayInfo(){
        echo "Lengte:" . $this->length. "<br>";
        echo "Prijs:" . $this->volume. "<br>";
      
        }

}
$kamer1 = new berekening(2, 4, 8, 12, 14 );
$kamer2 = new berekening(2, 4, 8, 12, 14 );
$kamer3 = new berekening(2, 4, 8, 12, 14);

$kamer1->displayInfo();
$kamer2->displayInfo();
$kamer3->displayInfo();
?>