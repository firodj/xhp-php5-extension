--TEST--
Reflection API 07
--FILE--
<?php //xhp
class foo {
  public $bar /** a */;
  function etc() {}
}
$foo = new ReflectionMethod('foo', 'etc');
echo $foo->getDocComment();
exit;
<a />;
--EXPECT--
