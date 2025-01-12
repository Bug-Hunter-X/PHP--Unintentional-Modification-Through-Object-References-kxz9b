In PHP, a common yet often overlooked error stems from improper handling of object references.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Reference assignment, not a copy

$obj2->value = 10;

echo $obj1->value; // Outputs 10, unexpectedly
```

The issue: `$obj2 = $obj1` doesn't create a new `MyClass` object.  Instead, `$obj2` becomes another name for the *same* object as `$obj1`.  Modifying `$obj2` directly affects `$obj1`.

This can lead to hard-to-debug situations, especially in larger applications where object references are passed around extensively.