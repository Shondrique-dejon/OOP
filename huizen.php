<?php

class Huis {
    private int $huis;
    private int $floor;
    private int $room;
    private float $width;
    private float $height;
    private float $depth;
    private int $volume;

    public function __construct( $huis, $floor, $room, $width, $height, $depth, $volume)
    {
        $this->huis = $huis;
        $this->floor = $floor;
        $this->room = $room;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->volume = $volume;
    }

    public function setVolume($volume)
    {
       $this->volume = $this->width * $this->height * $this->depth;
    }

    public function getHouse()
    {
      return "Dit huis heeft".$this->floor."verdiepingen, 4 kamers en een volume van ".$this->volume."m3";
    }

    public function getPrice()
    {
       return "De prijs is:".$price;
    }

  public function displayInfo(){
  echo "Aantal verdiepingen:" . $this->floor. "<br>";
  echo "Aantal kamers:" . $this->room. "<br>";
  echo "Prijs:" . $this->volume. "<br>";

  }

}
$house = new Huis(2, 4, 8, 13, 30, 300, 400);
$house2 = new Huis(1, 3, 4, 5, 30, 32, 192);
$house3 = new Huis(3, 6, 8, 32, 20, 23, 720);

$house->displayInfo();
$house2->displayInfo();
$house3->displayInfo();

?>


