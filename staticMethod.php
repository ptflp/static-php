<?php
error_reporting(E_ALL | E_STRICT);
class A {
  public static $x = 'foo';
  public static function test() {
    return 42;
  }
}

echo 'A::$x='.A::$x; // 'foo'
echo '<br>';
echo 'A::test()='.A::test(); // 42
echo '<br>';
A::$x=0;
echo 'A::$x='.A::$x; // 'foo'

class B {
  public $id = 42;
  static public function foo() {
    echo $this->id;
  }
}

$b = new B;
// $b->foo(); // Fatal Using $this when not in object context

class C {
  static public function foo() {
    echo 42;
  }
}

echo '<br>$c->foo()=';
$c = new C;
$c->foo();
echo ' static methods can be called in object context';

class D {
  public function foo() {
    echo 42;
  }
}

D::foo(); //Deprecated calling none static method statically