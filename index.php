<!DOCTYPE html>
<html>
<head>
<titel>Cockgenerator</titel>
</head>
<body>
<h1>Random Cock Generator</h1>
<?php
class Cock {
  public $length;
  public $thickness;
  public $color;
  public function __construct($length, $thickness, $color) {
    $this->length = $length;
    $this->thickness = $thickness;
    $this->color = $color;
  }
  public function message() {
    return "My Cock is " . $this->length . " big, its thickness is " . $this->thickness . " and its is color " . $this->color . "!";
  }
}
function randomCock() {
	define("COLOR",["white","black"]);
    $range = rand(0,1);
    $color = COLOR[$range];
    if ($color == "white") {
    	$cocksize = rand(1, 20);
		$cockthickness = rand(1, 6);
    }
    else {
    	$cocksize = rand(10, 30);
		$cockthickness = rand(5, 10);
    }
    $myCock = new Cock("$cocksize cm","$cockthickness cm", "$color");
	echo $myCock -> message();
    
}
randomCock();
?>

</body>
</html>
