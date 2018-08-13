<?php 
class Foo {

  var $bar;

  function setBar($value) {
    $this->bar = $value;
  }

  function someFunction($param) {
    echo $param . $this->bar . "<br/>";  
  }

}

$foo = new Foo();

$foo->setBar("Erkin!");
$foo->someFunction("Hello, ");

$hmm = new Foo();
$hmm->setBar("Xeront!");
$hmm->someFunction("Hello ");

?>
