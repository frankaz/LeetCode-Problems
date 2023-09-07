<?php
// 1342. Number of Steps to Reduce a Number to Zero
// Level: Easy
// https://leetcode.com/problems/number-of-steps-to-reduce-a-number-to-zero/

class Solution
{

  /**
   * @param Integer $num
   * @return Integer
   */
  function numberOfSteps($num)
  {
    $counter = 0;

    while ($num > 0) {
      $counter++;
      if ($num % 2 == 0) {
        $num = $num / 2;
      } else {
        $num--;
      }
    }
    return $counter;
  }
}
