<?php
class Berekening {
    private int $room;
    private float $length;
    private float $height;
    private float $width;
    private int $volume;
    private float $pricePerCubicMeter;

    public function __construct($room, $width, $height, $length, $volume, $pricePerCubicMeter)
    {
        $this->room = $room;
        $this->length = $length;
        $this->height = $height;
        $this->width = $width;
        $this->volume = $volume;
        $this->pricePerCubicMeter = $pricePerCubicMeter;
    }

    public function setVolume()
    {
        $this->volume = $this->length * $this->width * $this->height;
    }

    public function getPrice()
    {
     
        return "De prijs is: €" . ($this->volume * $this->pricePerCubicMeter);
    }

    public function displayInfo()
    {
        echo "Lengte: " . $this->length . "m<br>";
        echo "Breedte: " . $this->width . "m<br>";
        echo "Hoogte: " . $this->height . "m<br>";
        echo "Volume: " . $this->volume . " m³ <br>";
    }
}

$berekening = new Berekening(1, 5.0, 3.0, 2.0, 0, 10);
$berekening->setVolume();
$berekening->displayInfo();
echo $berekening->getPrice();
?>
