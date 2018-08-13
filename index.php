<!DOCTYPE html>
<html>
<head>
	<title>Test Xeront Encrypt</title>
</head>
<body>

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

$foo->setBar("Erkin!"); // <-- my boss name :)
$foo->someFunction("Hello, ");

$hmm = new Foo();
$hmm->setBar("Xeront!");
$hmm->someFunction("Hello ");
?>

</body>
</html>
