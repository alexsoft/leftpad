# Left Pad for PHP

A whole package is just one file with a single function `leftpad(string $string, int $length, string $filler)`

    $string - your initial string
    $length - final length of returned string
    $filler - symbol with which initial string should be left padded

### 1. Install
```bash
composer require alexsoft/leftpad
```

### 2. Use it
```php
\Alexsoft\Leftpad\leftpad('foo', 5) // => "  foo"

\Alexsoft\Leftpad\leftpad('1', 3, '0') // => "001"
```
