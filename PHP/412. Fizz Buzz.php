<?php
// 412. Fizz Buzz
// Level: Easy
// https://leetcode.com/problems/fizz-buzz/

class Solution
{
  function fizzBuzz($n)
  {
    $zzList = array_fill(1, $n, ""); //O(n)

    for ($i = 1; $i <= $n; $i++) {
      $temp = "";
      if (
        $i % 3 == 0
      ) $temp = "Fizz";
      if (
        $i % 5 == 0
      ) $temp .= "Buzz";
      $zzList[$i] = $temp === "" ? strval($i) : $temp;
    }

    return $zzList;
  }
}
