To solve the problem, use cloning to create independent copies of objects:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = clone $obj1; // Creates a new object

$obj2->value = 10;

echo $obj1->value; // Outputs 0
echo $obj2->value; // Outputs 10
```

By using `clone`, we ensure that `$obj2` is a completely separate object, preventing accidental modification of `$obj1`.  Always remember to clone when you need independent copies of objects to prevent unexpected side-effects.