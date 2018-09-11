<?php
function foo() {
  $a = 0;
  echo '<br>';
  echo $a;
  $a = $a + 1;
}
echo 'Not static variable';
foo(); // 0
foo(); // 0
foo(); // 0

echo '<br>Static context';

function bar() {
  static $a = 0;
  // static $a =foo(); Constant expression contains invalid operations. Only constant expression.
  echo '<br>';
  echo $a;
  $a = $a + 1;
}

bar(); // 0
bar(); // 1
bar(); // 2