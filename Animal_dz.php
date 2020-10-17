<?
header('Content-Type: text/html; charset=utf-8');
abstract class Animal{
  private $nickname;
  private $age;
  private $breed;
  function __construct($nickname,$age,$breed){
    $this->nickname = $nickname;
    $this->age = $age;
    $this->breed = $breed;
  }
	public function getNickname(){return $this->nickname;}
	public function getAge(){return $this->age;}
	public function getBreed(){return $this->breed;}
}

class Horse extends Animal{
  function run(){
    echo("Игого, я поскакал(а).<br>");
  }
}

class Pegasus extends Horse{
    function fly(){
    echo("Игого, я полетел(а).<br>");
  }
}

$aura = new Horse("Аура",7,"белая");
echo $aura->run();
$dunny = new Pegasus("Данни",10,"серебристый");
echo $dunny->fly();
?>
