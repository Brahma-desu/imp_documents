<?php

//To check given number is even or odd

function isEvenOdd($num){
  if($num % 2 == 0){
    return true;
  }else{
    return false;
  }
}

echo isEvenOdd(0) ? "Given number is Even" : "Given number is Odd";

//2nd answer ( Bitwise check )

function isCheck($num){
  $one = 1;

  //Bitwise operation AND
  $bitwiseValue = $num & $one;

  if($bitwiseValue == 1){
    return false;
  }else{
    return true;
  }
}

echo isCheck(234) ? "Give number is Even" : "Given number is Odd";

//============================================================================

//To check give input value is palindrome

function isPalindrome($val){
  //Check input empty or not
  if(!isset($val)){
    return "Input cannot be null";
  }

  if(!is_string($val) && !is_numeric($val)){
    return "Input must be a string or number";
  }

  //in case give me value is number, convert into string
  $stringVal = (string)$val;

  if(strlen($stringVal) === 0){
    return "Input must be a single character";
  }

  // Remove all non-alphanumeric characters and convert to lowercase
  $cleaned = preg_replace('/[^a-zA-Z0-9]/', '', $stringVal);
  $cleaned = strtolower($cleaned);

  //To compare the string with its reverse
  if($cleaned === strrev($cleaned)){
    return "Given input value is palindrome";
  }else{
    return "Given input value is not palindrome";
  }
}

echo isPalindrome(293);

//==============================================================
//To find the max value in array

function findMaxValue($arr){
  if(!is_array($arr)){
    return "Input must be a array.";
  }

  if(count($arr) === 0){
    return "Input value must be a value";
  }

  return max($arr);
}

$arrVal = [3,5,9,20,4];

echo findMaxValue($arrVal);

//Alternative option for this problem

function findMaxManual($arr){
  if(!is_array($arr)){
    return "Input must be a array.";
  }

  if(count($arr) === 0){
    return "Input value must be a value";
  }

  $max = $arr[0];

  for ($i=0; $i < count($arr); $i++) { 
    if($max < $arr[$i]){
      $max = $arr[$i];
    }
  }
  return $max;
}

$arrVal = [3,5,9,20,4];
echo findMaxManual($arrVal);

//=========================================================

//Write a PHP function to calculate the factorial of a number (both iterative and recursive solutions).

function findFactorialIterative($num){

  if(empty($num)){
    return "Input must be value, cannot be empty";
  }

  if(!is_numeric($num)){
    return "Input must be number";
  }

  if($num < 0){
    return null;
  }

  $factorialVal = 1;
  for ($i=2; $i < $num; $i++) { 
    $factorialVal *= $i;
  }

  return $factorialVal;
}

echo findFactorialIterative(5);

//Alternative option

function findFactorialRecursive($num){
  if(empty($num)){
    return "Input must be value, cannot be empty";
  }

  if(!is_numeric($num)){
    return "Input must be number";
  }

  if($num < 0){
    return null;
  }

  if($num <= 1){
    return 1;
  }

  return $num * findFactorialRecursive($num - 1);
}

echo findFactorialRecursive(5);
?>