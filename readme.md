# Left Pad for PHP

A whole package is just one file with a single function `leftpad($string, $length, $filler)`

    $string - your initial string
    $length - final length of returned string
    $filler - symbol with which initial string should be left padded

### 1. Install

    composer require alexsoft/leftpad

### 2. Use it

    leftpad('foo', 5) // => "  foo"

    leftpad(1, 3, 0) // => "001"
