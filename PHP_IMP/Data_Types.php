<?php 

//PHP Data Types

/* 
 The PHP data types are divided into three types, they are 
 1. Scalar Type
   => String – Text values ('', "")
   => Integer – Whole numbers
   => Float (Double) – Decimal numbers
   => Boolean – true or false

 2. Compound Types
   => Array  - Stores multiple values
   => Object - Stores data as objects (OOP)
   => Callable
   => Iterable

 3. Special Type
   => null  - Represents an empty variable
   => resource  - References external resources (e.g., database connections)
===================================================================================

PHP String Functions:-
1.1 strlen($string);   ==> find string length
1.2 str_word_count($string) => Return the number of words in string
1.3 count_chars($string, $mode) => Return information about characters used in a string
2. strtoupper($string);  ==> Convert to upper case
3. strtolower($string);  ==> Convert to lower case
4. strpos($string, $search);  ==> 	Find position of first occurrence
5. strrpos($string, $search);  ==> Find position of last occurrence
6. str_contains($string, $search); => 
7. str_replace($search, $replace, $string);
8. str_ireplace($searh, $replace, $string); => Case-insentiue
9. substr($string, $start, $length);  ==> Get part of a string
10. explode($element, $array);  ==> Split string into array
11. implode($element, $array);  ==> join array into string
12. trim($string);  ==> Remove whitespace
13. ltrim($string); ==> Strip whitespace (or other characters) from the beginning of a string
14. rtrim($string); ==> strip whitespace from the last of a string
15. htmlspecialchars($string)  => Converts special HTML entities (like < > &) to prevent XSS attacks.
16. is_string($string);

==========================================================================

PHP Number(integer and float) functions
1. is_int($str)/is_float($str)  ==> Check type
2. round($num)/ceil($num)/floor($num)  ==> Round number
3. abs($num)  ==> Absolute value
4. max($val1, $val2)/min($val1, $val2) ==> Largest/smallent number
5. rand($min, $max)/mt_rand()    ==> Random number
6. number_format($num, $decimals) ==> Format number
7. intval($val)/floatval($val)  ==> convert into int/float number

===========================================================================

PHP Array Functions:-

1. is_array($arr)  => type check
2. count($arr)  ==> Find the counut of array
3. array_push/array_pop  ==> Add/remove the element in the end
4. array_unshift/array_shift  ==> Add/remove the element in the first
5. array_merge($arr1, $arr2)  ==> To merge array's in single array
6. in_array($val, $arr)  ==> To check if value exists or not
7. array_key_exists($key, $arr);  ==> To check if key exists or not
8. array_keys($arr)/array_values($arr);  ==> To get the keys/values in array
9. sort($arr)/rsort($arr);  ===> Sort ascending/descending order
10. asort($arr)/ksort($arr);  ==> To sort by value/key
11. array_map($callback ,$arr);  ==> Apply function to each element
12. array_filter($arr, $callback); ==> Filter elements
13. array_reducer($arr, $callback); ==> Reduce array to a single value
14. array_slice($arr, $offset, $length); ==> Extract portion
15. array_diff($arr1, $arr2); ==> Difference of arrays
16. array_interset($arr1, $arr2); ==> Intersection of arrays
17. array_chunk($arr);  ==> To split into chunks
18. array_walk();  ==> Apply user function

=====================================================================================

PHP Object functions:-

class Person {
    public $name = "John";
    public function greet() {
        return "Hello " . $this->name;
    }
}

$obj = new Person();

1. 

*/