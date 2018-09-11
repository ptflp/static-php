<?php
echo 'Creating different objects';
class A {
  public function foo() {
    static $x = 0;
    echo ++$x;
  }
}

$a1 = new A;
$a2 = new A;
/*
* Variable exist in class context
*/
echo '<br>$a1->foo = ';
$a1->foo(); // 1

echo '<br>$a2->foo = ';
$a2->foo(); // 2

echo '<br>$a1->foo = ';
$a1->foo(); // 3

echo '<br>$a2->foo = ';
$a2->foo(); // 4

echo '<br>Extending class';

class B extends A {
}

$a1 = new A;
$b1 = new B;


echo '<br>$a1->foo = ';
$a1->foo(); // 5 in A class context

echo '<br>$b1->foo = ';
$b1->foo(); // 1 in B class context

echo '<br>$a1->foo = ';
$a1->foo(); // 6 in A class context

echo '<br>$b1->foo = ';
$b1->foo(); // 2 in B class context