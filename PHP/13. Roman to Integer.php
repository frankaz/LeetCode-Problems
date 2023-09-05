<?php
// 13. Roman to Integer
// Level: Easy
// https://leetcode.com/problems/roman-to-integer/

class Solution
{
  function romanToInt($s)
  {
    $total = 0;
    $map = [
      'I' => 1,
      'V' => 5,
      'X' => 10,
      'L' => 50,
      'C' => 100,
      'D' => 500,
      'M' => 1000
    ];
    for ($i = 0; $i < strlen($s); $i++) {
      if ($i < strlen($s) + 1) {
        if ($map[$s[$i]] < $map[$s[$i + 1]])
          $total -= $map[$s[$i]];
        else
          $total += $map[$s[$i]];
      } else {
        $total += $map[$s[$i]];
      }
    }

    return $total;
  }
}
